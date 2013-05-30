<?php
namespace Service\ListenerBundle\EventListener;

use Symfony\Component\HttpKernel\Event\GetResponseEvent;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpKernel\Exception\HttpExceptionInterface;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;
use Symfony\Component\Security\Core\Exception\AccessDeniedException;

class ServiceRequestListener
{
    protected $container;
    protected $monolog;
    public function __construct($container, $monolog){
        $this->container = $container;
        $this->monolog = $monolog;
    }

    public function onKernelRequest(GetResponseEvent $event)
    {
        $kernel  = $event->getKernel();
        $request = $event->getRequest();
        $method = $request->getMethod();
        /*if($method == "GET"){
            throw new NotFoundHttpException("Wrong Method");
        }*/
        $path_info = $request->getPathInfo();

        $this->monolog->err("Sux");
        $response = new Response();
        $response->setContent("BlaBla");
        $event->setResponse($response);
    }
}