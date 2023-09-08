<?php

namespace App\Controller;

use App\Entity\User;
use App\Form\UserProfileType;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class SettingsProfileController extends AbstractController
{
    #[Route('/settings/profile', name: 'app_settings_profile')]
    public function profile(): Response
    {

        /** @var User $user */
        $user = $this->getUser() ?? new User();
        $profile = $user->getUserProfile();

        $form = $this->createForm(UserProfileType::class, $profile);

        if ($form->isSubmitted() && $form->isValid()) {
            $data = $form->getData();
            dd($data);
        }

        return $this->render('settings_profile/profile.html.twig', [
            'form' => $form->createView(),
        ]);
    }

    #[Route('/settings/profile', name: 'app_settings_profile_image')]
    public function profileImage(): Response
    {

        /** @var User $user */
        $user = $this->getUser() ?? new User();
        $profile = $user->getUserProfile();

        $form = $this->createForm(UserProfileType::class, $profile);

        if ($form->isSubmitted() && $form->isValid()) {
            $data = $form->getData();
            dd($data);
        }

        return $this->render('settings_profile/profile.html.twig', [
            'form' => $form->createView(),
        ]);
    }
}
