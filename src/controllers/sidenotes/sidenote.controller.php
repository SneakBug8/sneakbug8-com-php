<?php

class SidenoteController
{
    public static function getController()
    {
        return function ($request, $response, $service) {
            if ($response->isSent()) {
                return;
            }

            require_once basePath() . "services/sidenote.service.php";

            $note = SidenoteService::$Instance->getWithUrl($request->url);

            if (!$note) {
                return;
            }

            $service->note = $note;
            $service->title = $service->note->title;

            $service->innerview = viewsPath() . "sidenote.html.php";
            $service->render(viewsPath() . "index.html.php");
            $response->send();
        };
    }
}