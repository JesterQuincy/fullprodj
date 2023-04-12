<?php

namespace App\Controller;
use App\Entity\User;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Bundle\SecurityBundle\Security;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpKernel\Attribute\AsController;
use Symfony\Component\Security\Core\User\UserInterface;

class TaskController extends AbstractController
{
    public function __construct(private readonly EntityManagerInterface $entityManager)
    {
    }

    public function __invoke(Security $security): JsonResponse
    {
        /** @var UserInterface $user */
        $user = $security->getUser();
        $user = $this->entityManager->getRepository(User::class)->findOneBy(['id' => $user]);
        $tasks = $user->getTasks();
        if (!$tasks) {
            return new JsonResponse([]);
        }

        return new JsonResponse($tasks);

    }
}