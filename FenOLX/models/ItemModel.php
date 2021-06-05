<?php


class ItemModel extends BaseModel
{
    private $itemRepository;

    function __construct() {
        $this->itemRepository = new ItemRepository();
    }

    public function create($data)
    {
        return $this->itemRepository->create($data);
    }

    public function view($id)
    {
        return $this->itemRepository->getById($id);
    }

    public function listAll()
    {
        return $this->itemRepository->getAll();
    }

    public function search($name) {
        return $this->itemRepository->getAllByName($name);
    }

    public function update($data)
    {
        return $this->itemRepository->update($data);
    }

    public function delete($id)
    {
        return $this->itemRepository->delete($id);
    }
}