<?php


class Home extends Controller
{

    public function index()
    {
        if (!empty($_POST)) {
            if (!empty($_FILES['photos'])) {

                $files = ArrayHelper::normalizeArray($_FILES['photos']);

                foreach ($files as $file) {
                    $check = getimagesize($file["tmp_name"]);

                    if ($check !== false) {
                        $extension = pathinfo($file['name'], PATHINFO_EXTENSION);

                        $photo = PhotoRepository::create($extension);

                        $path = INC_ROOT . "/public/photos/" . $photo->getName();
                        $basePath = "/photos/" . $photo->getName();
                        $miniPhotoPath = "/miniphotos/" . $photo->getName();

                        move_uploaded_file($file['tmp_name'], $path);

                        PhotoRepository::update($photo->id, $basePath, $miniPhotoPath);

                        PhotoService::createMiniPhoto($photo->getName());
                    }


                }
            }
        }
        $photos = Photo::orderBy('views_num', 'DESC')->get();
        $this->view('home/index', [
            'photos' => $photos
        ]);
    }

    public function photo($id)
    {
        $photo = Photo::find($id);
        $this->view('home/view', [
            'photo' => $photo
        ]);
    }

    public function iterate($id)
    {
        PhotoRepository::iterate(intval($id));
    }


}