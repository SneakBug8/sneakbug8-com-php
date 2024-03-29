<?php

class SingleController
{
    public static function getController()
    {
        return function ($request, $response, $service) {
            if ($response->isSent()) {
                return;
            }

            require_once basePath() . "/services/post.service.php";

            $post = PostService::getWithUrl($request->url);
            if (!isset($post)) {
                return;
            }

            $service->post = $post;
            $service->title = $service->post->title;

            $service->description = $post->description;
            $service->image = $post->image;

            $service->innerview = viewsPath() . "single.html.php";
            $service->render(viewsPath() . "index.html.php");
            $response->send();
        };
    }
}
