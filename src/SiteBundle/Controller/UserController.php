<?php

namespace SiteBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use SiteBundle\Entity\User;
use SiteBundle\Form\RegisterType;
use SiteBundle\Entity\Part;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Component\HttpFoundation\Request;

class UserController extends Controller {

    /**
     * @Route("/register")
     * @Template()
     */
    public function registerAction(Request $request) {
        $user = new User;
        if (!count($this->getDoctrine()->getRepository("SiteBundle:Part")->findOneByName("Podstawowa broń")))
            $this->setPart();
        $user->setAvatar("http:\\avatar.png")
                ->setLevel(1)
                ->setExp(0)
                ->setClass(1)
                ->setCurrentHp(500)
                ->setMaxHp(500)
                ->setAttackHero(5)
                ->setDefenceHero(5)
                ->setAggressionHero(5)
                ->setAgilityHero(5)
                ->setPrecisionHero(5)
                ->setSpeedShip(10)
                ->setAttackShip(10)
                ->setDefenceShip(10)
                ->setAggressionShip(10)
                ->setPrecisionShip(10)
                ->setAgilityShip(10)
                ->setOreOwned(500)
                ->setAntimatterOwned(500)
                ->setUraniumOwned(500)
                ->setXCoord(rand(0, 100))
                ->setYCoord(rand(0, 100))
                ->setActive(false)
                ->setLastLoginData(new \DateTime())
                ->setActivationHash(md5(time()))
                ->setAttackPart($this->getDoctrine()->getRepository("SiteBundle:Part")->findOneByName("Podstawowa broń"))
                ->setDefencePart($this->getDoctrine()->getRepository("SiteBundle:Part")->findOneByName("Podstawowa tarcza"))
                ->setPrecisePart($this->getDoctrine()->getRepository("SiteBundle:Part")->findOneByName("Podstawowa nawigacja"))
                ->setAgilityPart($this->getDoctrine()->getRepository("SiteBundle:Part")->findOneByName("Podstawowy panel"))
                ->setAggressionPart($this->getDoctrine()->getRepository("SiteBundle:Part")->findOneByName("Podstawowe barwy"))
                ->setHpPart($this->getDoctrine()->getRepository("SiteBundle:Part")->findOneByName("Podstawowy pokój medyczny"))
                ->setSpeedPart($this->getDoctrine()->getRepository("SiteBundle:Part")->findOneByName("Podstawowe silniki"));


        $form = $this->createForm("SiteBundle\Form\RegisterType", $user);

        if ($request->isMethod('POST')) {
            $form->handleRequest($request);
            if ($form->isValid()) {
                $this->get('session')->getFlashBag()->add('notice', 'Konto zostało utworzone.');
                $factory = $this->get('security.encoder_factory');
                $encoder = $factory->getEncoder($user);
                $user->setSalt(md5(time()));
                $user->setPassword($encoder->encodePassword($user->getPassword(), $user->getSalt()));
                $em = $this->getDoctrine()->getManager();
                $em->persist($user);
                $em->flush();

                /*$message = \Swift_Message::newInstance()
                        ->setSubject('Hello Email')
                        ->setFrom($user->getEmail())
                        ->setTo($user->getEmail())
                        ->setBody("lallaal", 'text/html');
                $this->get('mailer')->send($message);*/

                //return new RedirectResponse($this->generateUrl('site_index'));
            }
        }

        return array("form" => $form->createView());
    }

    private function setPart() {
        $em = $this->getDoctrine()->getManager();
        $partAttack = new Part();
        $partAttack->setAntimatterCost(0)
                ->setAvatar("http://pl.dotabuff.com/assets/skills/tinker-laser-5150-315b3d78cc2fe67bc352a0ef717a3c0e43a3b7d0f7b87bfcf0dc1271953bede2.png")
                ->setDestination(1)
                ->setLevelRequired(0)
                ->setName("Podstawowa broń")
                ->setOreCost(0)
                ->setSetUpTime(0)
                ->setUraniumCost(0)
                ->setValue(0);
        $partDefence = clone $partAttack;
        $partDefence->setDestination(2)->setName("Podstawowa tarcza")->setAvatar("https://www.heroesofnewerth.com/images/items/Item_BarrierIdol.jpg");
        $partPrecise = clone $partAttack;
        $partPrecise->setDestination(3)->setName("Podstawowa nawigacja")->setAvatar("http://thumbs.dreamstime.com/m/fantasy-space-navigation-sphere-17266835.jpg");
        $partAgility = clone $partAttack;
        $partAgility->setDestination(4)->setName("Podstawowy panel")->setAvatar("https://lh6.googleusercontent.com/-Qynt5T0vbuM/VD0R6oDmNjI/AAAAAAAAACs/lE0wg-TvufE/w126-h126-p/image.jpg");
        $partAggression = clone $partAttack;
        $partAggression->setDestination(5)->setName("Podstawowe barwy")->setAvatar("http://www.apkfree.com/images/app-icon/3d-space-live-wallpaper-hd.png");
        $partHp = clone $partAttack;
        $partHp->setDestination(6)->setName("Podstawowy pokój medyczny")->setAvatar("http://wikiwiki.jp/spaengineers/?plugin=ref&page=%A5%A2%A5%A4%A5%B3%A5%F3%C3%D6%A4%AD%BE%EC(%A5%D6%A5%ED%A5%C3%A5%AF%CE%E0)&src=medical_room.png");
        $partSpeed = clone $partAttack;
        $partSpeed->setDestination(7)->setName("Podstawowe silniki")->setAvatar("https://static-s.aa-cdn.net/img/ios/698699271/dd48e20af2f8ca24d43c8a53319dbf90");
        $em->persist($partAttack);
        $em->persist($partDefence);
        $em->persist($partPrecise);
        $em->persist($partAgility);
        $em->persist($partAggression);
        $em->persist($partHp);
        $em->persist($partSpeed);
        $em->flush();
    }

}
