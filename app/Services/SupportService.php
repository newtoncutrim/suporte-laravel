<?php
namespace App\Services;

use App\DTO\CreateSupportDTO;
use App\DTO\UpdateSupportDTO;
use App\Repository\SupportInterfaceRepository;
use stdClass;

class SupportService {

    public function __construct(protected SupportInterfaceRepository $repository)
    {}

    public function paginate(string $filter = null, int $pages = 1, int $totalPerPage = 15){
        return $this->repository->paginate(
            pages: $pages,
            totalPerPage: $totalPerPage,
            filter: $filter
        );
    }
    public function getAll(string $filter = null): array
    {
        return $this->repository->getAll($filter);
    }

    public function findOne(int|string $id): stdClass|null
    {
        return $this->repository->findOne($id);
    }

    public function new(CreateSupportDTO $dto): stdClass
    {
        return $this->repository->new($dto);
    }

    public function update(UpdateSupportDTO $dto): stdClass|null
    {
        return $this->repository->update($dto);
    }

    public function delete(string|int $id)
    {
        return $this->repository->destroy($id);
    }
}

?>
