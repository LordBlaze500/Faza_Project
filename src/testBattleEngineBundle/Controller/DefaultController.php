<?php

namespace testBattleEngineBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Request;

class DefaultController extends Controller
{   
    /**
     * @Route("/testEngine")
     */
    public function indexAction()
    {
        $request = Request::createFromGlobals();
        if ($request->request->get('OK'))
        {
            $result = $this->calculateBattle(
                    $request->request->get('attackHero1'), $request->request->get('attackShip1'),
                    $request->request->get('defenceHero1'), $request->request->get('defenceShip1'),
                    $request->request->get('aggressionHero1'), $request->request->get('aggressionShip1'),
                    $request->request->get('precisionHero1'), $request->request->get('precisionShip1'),
                    $request->request->get('agilityHero1'), $request->request->get('agilityShip1'), 
                    $request->request->get('speed1'), $request->request->get('HP1'),
                    $request->request->get('attackHero2'), $request->request->get('attackShip2'),
                    $request->request->get('defenceHero2'), $request->request->get('defenceShip2'),
                    $request->request->get('aggressionHero2'), $request->request->get('aggressionShip2'),
                    $request->request->get('precisionHero2'), $request->request->get('precisionShip2'),
                    $request->request->get('agilityHero2'), $request->request->get('agilityShip2'), 
                    $request->request->get('speed2'), $request->request->get('HP2'),null);
            if ($request->request->get('fullBattle'))
                return $this->render('testBattleEngineBundle:Default:index.html.twig', array('result' => $result, 'fullBattle' => 'yes'));
            else
                return $this->render('testBattleEngineBundle:Default:index.html.twig', array('result' => $result));
        }
        else
            return $this->render('testBattleEngineBundle:Default:index.html.twig');
    }
    
    function randomDouble($min, $max)
    {
        $x = mt_rand($min, $max * 100000)/100000;
        return $x;
    }
    
    function calculateBattle($attackHero1,$attackShip1,$defenceHero1,$defenceShip1,$aggressionHero1,
            $aggressionShip1,$precisionHero1,$precisionShip1,$agilityHero1,$agilityShip1,$speed1,$HP1,
            $attackHero2,$attackShip2,$defenceHero2,$defenceShip2,$aggressionHero2,$aggressionShip2,
            $precisionHero2,$precisionShip2,$agilityHero2,$agilityShip2,$speed2,$HP2,$fortifications)
    {
        $attack1 = log10((($attackHero1 * 10 + $attackShip1 * 10) + 10)/10) * 850 + 1;
        $attack2 = log10((($attackHero2 * 10 + $attackShip2 * 10) + 10)/10) * 850 + 1;
        $defence1 = log10((($defenceHero1 * 10 + $defenceShip1 * 10) + 10)/10) * 750 + 1;
        $defence2 = log10((($defenceHero2 * 10 + $defenceShip2 * 10) + 10)/10) * 750 + 1;
        $aggression1 = pow(1.0145, $aggressionHero1 + $aggressionShip1) * 5 + 10;
        $aggression2 = pow(1.0145, $aggressionHero2 + $aggressionShip2) * 5 + 10;
        $precision1 = pow(1.018, $precisionHero1 + $precisionShip1 - 10) * 2.55 + 25;
        $precision2 = pow(1.018, $precisionHero2 + $precisionShip2 - 10) * 2.55 + 25;
        $agility1 = pow(1.017, $agilityHero1 + $agilityShip1 - 10) * 2.55;
        $agility2 = pow(1.017, $agilityHero2 + $agilityShip2 - 10) * 2.55;
        $move = true;
        if ($speed1 < $speed2) 
            $move = false;
        $turns = 0;
        $it = 1;
        $res[] = 0;
        $exp1 = 0;
        $exp2 = 0;
        while ($HP1 > 0 && $HP2 > 0)
        {           
            ++$turns;
            if ($move === true)
            {
                $x = $this->randomDouble(0,100);
                if ($x <= $aggression1)
                    $attacks = 2;
                else 
                    $attacks = 1;
                for ($i = 0; $i < $attacks; ++$i)
                {
                    $x = $this->randomDouble(0,100);
                    if ($x <= $precision1 - $agility2)
                    {
                        if ($attack1 - $defence2 < 1)
                        {
                            $HP2 -= 1;
                            $exp1 += 1;
                            if ($i == 0)
                                $res[$it] = [1, 1, false, $HP1, $HP2];
                            else
                                $res[$it] = [1, 1, true, $HP1, $HP2];
                            ++$it;
                        }
                        else
                        {
                            $randomDmg = $this->randomDouble(0, ($attack1 - $defence2)/8);
                            $sign = $this->randomDouble(0,1);
                            if ($sign > 0.5)
                            {
                                $dmg = ($attack1 - $defence2) + $randomDmg;
                                $HP2 -= $dmg;
                                $exp1 += $dmg;
                                if ($i == 0)
                                    $res[$it] = [1, $dmg, false, $HP1, $HP2];
                                else
                                    $res[$it] = [1, $dmg, true, $HP1, $HP2];
                                ++$it;
                            }
                            else
                            {
                                if (($attack1 - $defence2) - $randomDmg < 1)
                                {
                                    $HP2 -= 1;
                                    $exp1 += 1;
                                    if ($i == 0)
                                        $res[$it] = [1, 1, false, $HP1, $HP2];
                                    else
                                        $res[$it] = [1, 1, true, $HP1, $HP2];
                                    ++$it;
                                }
                                else
                                {
                                    $dmg = ($attack1 - $defence2) - $randomDmg;
                                    $HP2 -= $dmg;
                                    $exp1 += $dmg;
                                    if ($i == 0)
                                        $res[$it] = [1, $dmg, false, $HP1, $HP2];
                                    else
                                        $res[$it] = [1, $dmg, true, $HP1, $HP2];
                                    ++$it;
                                }
                            }
                        }
                    }
                    else
                    {
                        if ($i == 0)
                            $res[$it] = [1, 0, false, $HP1, $HP2];
                        else
                            $res[$it] = [1, 0, true, $HP1, $HP2];
                        ++$it;
                    }
                }
            }
            else
            {
                $x = $this->randomDouble(0,100);
                if ($x <= $aggression2)
                    $attacks = 2;
                else 
                    $attacks = 1;
                for ($i = 0; $i < $attacks; ++$i)
                {
                    $x = $this->randomDouble(0,100);
                    if ($x <= $precision2 - $agility1)
                    {
                        if ($attack2 - $defence1 < 1)
                        {
                            $HP1 -= 1;
                            $exp2 += 1;
                            if ($i == 0)
                                $res[$it] = [2, 1, false, $HP1, $HP2];
                            else
                                $res[$it] = [2, 1, true, $HP1, $HP2];
                            ++$it;
                        }
                        else
                        {
                            $randomDmg = $this->randomDouble(0, ($attack2 - $defence1)/8);
                            $sign = $this->randomDouble(0,1);
                            if ($sign > 0.5)
                            {
                                $dmg = ($attack2 - $defence1) + $randomDmg;
                                $HP1 -= $dmg;
                                $exp2 += $dmg;
                                if ($i == 0)
                                    $res[$it] = [2, $dmg, false, $HP1, $HP2];
                                else
                                    $res[$it] = [2, $dmg, true, $HP1, $HP2];
                                ++$it;
                            }
                            else
                            {
                                if (($attack2 - $defence1) - $randomDmg < 1)
                                {
                                    $HP1 -= 1;
                                    $exp2 += 1;
                                    if ($i == 0)
                                        $res[$it] = [2, 1, false, $HP1, $HP2];
                                    else
                                        $res[$it] = [2, 1, true, $HP1, $HP2];
                                    ++$it;
                                }
                                else
                                {
                                    $dmg = ($attack2 - $defence1) - $randomDmg;
                                    $HP1 -= $dmg;
                                    $exp2 += $dmg;
                                    if ($i == 0)
                                        $res[$it] = [2, $dmg, false, $HP1, $HP2];
                                    else
                                        $res[$it] = [2, $dmg, true, $HP1, $HP2];
                                    ++$it;
                                }
                            }
                        }
                    }
                    else
                    {
                        if ($i == 0)
                            $res[$it] = [2, 0, false, $HP1, $HP2];
                        else
                            $res[$it] = [2, 0, true, $HP1, $HP2];
                        ++$it;
                    }
                }  
            }
            $move = !$move;
        }
        if ($HP1 > 0)
        {
            $exp1 = ceil($exp1);
            $exp2 = ceil($exp2/3);
            $res[0] = [1, $exp1, $exp2, ceil($HP1), 1];
            //$res[0] = "Wygrał gracz nr 1, mając jeszcze: ".$HP1." HP, walka trwała ".$turns." tur";
        }
        else 
        {
            $exp1 = ceil($exp1/3);
            $exp2 = ceil($exp2);
            $res[0] = [2, $exp1, $exp2, 1, ceil($HP2)];
        } 
        return $res;
        // [winner exp1 exp2 hp1 hp2]
        // [giving hploss isdouble]
    }
}
