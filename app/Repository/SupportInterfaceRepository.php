<?php

namespace App\Repository;
use App\DTO\{
    CreateSupportDTO,UpdateSupportDTO
};
use stdClass;

interface SupportInterfaceRepository {


    public function getAll(string $filter = null): array;

    public function findOne(int|string $id): stdClass|null;

    public function new(CreateSupportDTO $dto): stdClass;

    public function update(UpdateSupportDTO $dto): stdClass|null;

    public function destroy(string|int $id): void;

}

?>
