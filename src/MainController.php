<?php


namespace Tudublin;


class MainController
{
    const PATH_TO_TEMPLATES = __DIR__ . '/../templates';
    private $twig;

    public function __construct()
    {
        $this->twig = new \Twig\Environment(new \Twig\Loader\FilesystemLoader(self::PATH_TO_TEMPLATES));
    }

    public function home()
    {
        $template = 'index.html.twig';
        $args = [];
        $html = $this->twig->render($template, $args);
        print $html;
    }

    public function about()
    {
        $template = 'about.html.twig';
        $args = [];
        $html = $this->twig->render($template, $args);
        print $html;
    }

    public function contact()
    {
        $template = 'contact.html.twig';
        $args = [];
        $html = $this->twig->render($template, $args);
        print $html;
    }

    public function sitemap()
    {
        $template = 'sitemap.html.twig';
        $args = [];
        $html = $this->twig->render($template, $args);
        print $html;
    }



}