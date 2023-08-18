<?php
namespace App\Repository;

use stdClass;
use App\DTO\CreateSupportDTO;
use App\DTO\UpdateSupportDTO;
use App\Models\Support;

class SupportRepository implements SupportInterfaceRepository {
    public function __construct(protected Support $model)
    {}

    public function getAll(string $filter = null): array
    {
        return $this->model->where(function($query) use ($filter){
            if($filter){
                $query->where('subject', $filter);
                $query->where('body', 'like', "%{$filter}%");
            }
        })->get()->toArray();
    }

    public function findOne(int|string $id): stdClass|null
    {
        $support = $this->model->find($id);
        if(!$support){
            return null;
        }
        return (object) $support->toArray();
    }

    public function new(CreateSupportDTO $dto): stdClass
    {
        $support = $this->model->create((array) $dto);

        return (object) $support->toArray();
    }

    public function update(UpdateSupportDTO $dto): stdClass|null
    {
        if(!$support = $this->model->find($dto->id)){
            return null;
        }
        $support->update((array) $dto);

        return (object) $support->toArray();

    }

    public function destroy(string|int $id): void
    {
        $this->model->findOrFail($id)->delete();

    }
}
?>
