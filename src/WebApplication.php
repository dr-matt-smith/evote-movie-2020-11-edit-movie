<?php


namespace Tudublin;


class WebApplication
{
    public function run()
    {
        $action = filter_input(INPUT_GET, 'action');
        if(empty($action)){
            $action = filter_input(INPUT_POST, 'action');
        }
        $mainController = new MainController();
        $movieController = new MovieController();

        switch ($action) {
            case 'processEditMovie':
                $movieController->processUpdateMovie();
                break;

            case 'editMovie':
                $movieController->edit();
                break;

            case 'processNewMovie':
                $movieController->processNewMovie();
                break;

            case 'newMovieForm':
                $movieController->createForm();
                break;

            case 'deleteMovie':
                $movieController->delete();
                break;

            case 'about':
                $mainController->about();
                break;

            case 'contact':
                $mainController->contact();
                break;

            case 'list':
                $movieController->listMovies();
                break;

            case 'sitemap':
                $mainController->sitemap();
                break;

            default:
                $mainController->home();
        }
    }
}