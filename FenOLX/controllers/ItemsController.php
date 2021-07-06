<?php
class ItemsController extends BaseController
{
private $itemModel;
private $uploadManager;

function __construct() {
$this->itemModel = new ItemModel();
$this->uploadManager = new UploadManager();
}

public function create() {
if (!empty($_POST) && !empty($_POST["create"])) {
if (empty($_FILES["file_to_upload"]["error"])) {
$file_name = $this->uploadManager->uploadImg(); // 12321321_duck.jpg | false
if (!$file_name) {
return false;
} else {
$_POST["thumbnail"] = $file_name;
}
}

$this->itemModel->create($_POST);
header("Location: index.php?controller=items&action=listAll");
} else {
return true;
}
}

public function listAll() {
if (!empty($_POST) && !empty($_POST["search"])) {
$searchResults = $this->itemModel->search($_POST["topic"]);
if (sizeof($searchResults) > 0) {
return $searchResults;
} else {
return true;
}
} else {
return $this->itemModel->listAll();
}
}

public function view() {
if (!empty($_POST) && !empty($_POST["item_id"])) {
return $this->itemModel->view($_POST["item_id"]);
} else {
return false;
}
}

public function update() {
if (!empty($_POST) && !empty($_POST["update"])) {
$this->itemModel->update($_POST);
header("Location: index.php?controller=items&action=listAll");
} else if (!empty($_GET) && !empty($_GET["item_id"])) {
return $this->itemModel->view($_GET["item_id"]);
}
}

public function delete() {
if (!empty($_POST) && !empty($_POST["item_id"])) {
$this->itemModel->delete($_POST["item_id"]);
header("Location: index.php?controller=items&action=listAll");
} else {
return false;
}
}
}