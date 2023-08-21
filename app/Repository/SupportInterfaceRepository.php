<?php

namespace App\Repository;
use App\DTO\{
    CreateSupportDTO,UpdateSupportDTO
};
use stdClass;

interface SupportInterfaceRepository {

    public function paginate(string $filter = null, int $pages = 1, int $totalPerPage = 15): PaginateIterface;

    public function getAll(string $filter = null): array;

    public function findOne(int|string $id): stdClass|null;

    public function new(CreateSupportDTO $dto): stdClass;

    public function update(UpdateSupportDTO $dto): stdClass|null;

    public function destroy(string|int $id): void;

}

?>
