<?php

/* testBattleEngineBundle:Default:index.html.twig */
class __TwigTemplate_ccc0aa087ed097c86c5ed61e2dfe7f46e5819c6990917e7d85c894870128552d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_0eb76e05ec173cc74e987dd1f2ec3d7a237cb496738308e42e27d51ef0464f51 = $this->env->getExtension("native_profiler");
        $__internal_0eb76e05ec173cc74e987dd1f2ec3d7a237cb496738308e42e27d51ef0464f51->enter($__internal_0eb76e05ec173cc74e987dd1f2ec3d7a237cb496738308e42e27d51ef0464f51_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "testBattleEngineBundle:Default:index.html.twig"));

        // line 1
        echo "<html>
    <head>
        <meta charset=\"UTF-8\">
        <title>Test silnika walki</title>
        <script src=\"";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/jquery-2.2.2.min.js"), "html", null, true);
        echo "\"></script>
    </head>
    <body>
        <form method=\"POST\">
            <table border=\"1\">
            <tr>
            <td>
            <h2>Gracz 1</h2>
            <table>
                <tr>
                    <td><label>Attack Hero 1:</label></td>
                    <td><input type=\"number\" min=\"1\" max=\"99\" value=\"1\" id=\"attackHero1\" name=\"attackHero1\" class=\"player1\"></td>
                </tr>
                <tr>
                    <td><label>Attack Ship 1:</label></td>
                    <td><input type=\"number\" min=\"1\" max=\"99\" value=\"1\" id=\"attackShip1\" name=\"attackShip1\" class=\"player1\"></td>
                </tr>
                <tr>
                    <td><label>Defence Hero 1:</label></td>
                    <td><input type=\"number\" min=\"1\" max=\"99\" value=\"1\" id=\"defenceHero1\" name=\"defenceHero1\" class=\"player1\"></td>
                </tr>
                <tr>
                    <td><label>Defence Ship 1:</label></td>
                    <td><input type=\"number\" min=\"1\" max=\"99\" value=\"1\" id=\"defenceShip1\" name=\"defenceShip1\" class=\"player1\"></td>
                </tr>
                <tr>
                    <td><label>Aggression Hero 1:</label></td>
                    <td><input type=\"number\" min=\"1\" max=\"99\" value=\"1\" id=\"aggressionHero1\" name=\"aggressionHero1\" class=\"player1\"></td>
                </tr>
                <tr>
                    <td><label>Aggression Ship 1:</label></td>
                    <td><input type=\"number\" min=\"1\" max=\"99\" value=\"1\" id=\"aggressionShip1\" name=\"aggressionShip1\" class=\"player1\"></td>
                </tr>
                <tr>
                    <td><label>Precision Hero 1:</label></td>
                    <td><input type=\"number\" min=\"1\" max=\"99\" value=\"1\" id=\"precisionHero1\" name=\"precisionHero1\" class=\"player1\"></td>
                </tr>
                <tr>
                    <td><label>Precision Ship 1:</label></td>
                    <td><input type=\"number\" min=\"1\" max=\"99\" value=\"1\" id=\"precisionShip1\" name=\"precisionShip1\" class=\"player1\"></td>
                </tr>
                <tr>
                    <td><label>Agility Hero 1:</label></td>
                    <td><input type=\"number\" min=\"1\" max=\"99\" value=\"1\" id=\"agilityHero1\" name=\"agilityHero1\" class=\"player1\"></td>
                </tr>
                <tr>
                    <td><label>Agility Ship 1:</label></td>
                    <td><input type=\"number\" min=\"1\" max=\"99\" value=\"1\" id=\"agilityShip1\" name=\"agilityShip1\" class=\"player1\"></td>
                </tr>
                <tr>
                    <td><label>Speed 1:</label></td>
                    <td><input type=\"number\" min=\"1\" max=\"99\" value=\"1\" id=\"speed1\" name=\"speed1\" class=\"player1\"></td>
                </tr>
                <tr>
                    <td><label>HP 1:</label></td>
                    <td><input type=\"number\" min=\"100\" max=\"5000\" value=\"100\" id=\"HP1\" name=\"HP1\" class=\"player1\"></td>
                </tr>
            </table>
            </td>
            <td>
            <h2>Gracz 2</h2>
            <table>
                <tr>
                    <td><label>Attack Hero 2:</label></td>
                    <td><input type=\"number\" min=\"1\" max=\"99\" value=\"1\" id=\"attackHero2\" name=\"attackHero2\" class=\"player2\"></td>
                </tr>
                <tr>
                    <td><label>Attack Ship 2:</label></td>
                    <td><input type=\"number\" min=\"1\" max=\"99\" value=\"1\" id=\"attackShip2\" name=\"attackShip2\" class=\"player2\"></td>
                </tr>
                <tr>
                    <td><label>Defence Hero 2:</label></td>
                    <td><input type=\"number\" min=\"1\" max=\"99\" value=\"1\" id=\"defenceHero2\" name=\"defenceHero2\" class=\"player2\"></td>
                </tr>
                <tr>
                    <td><label>Defence Ship 2:</label></td>
                    <td><input type=\"number\" min=\"1\" max=\"99\" value=\"1\" id=\"defenceShip2\" name=\"defenceShip2\" class=\"player2\"></td>
                </tr>
                <tr>
                    <td><label>Aggression Hero 2:</label></td>
                    <td><input type=\"number\" min=\"1\" max=\"99\" value=\"1\" id=\"aggressionHero2\" name=\"aggressionHero2\" class=\"player2\"></td>
                </tr>
                <tr>
                    <td><label>Aggression Ship 2:</label></td>
                    <td><input type=\"number\" min=\"1\" max=\"99\" value=\"1\" id=\"aggressionShip2\" name=\"aggressionShip2\" class=\"player2\"></td>
                </tr>
                <tr>
                    <td><label>Precision Hero 2:</label></td>
                    <td><input type=\"number\" min=\"1\" max=\"99\" value=\"1\" id=\"precisionHero2\" name=\"precisionHero2\" class=\"player2\"></td>
                </tr>
                <tr>
                    <td><label>Precision Ship 2:</label></td>
                    <td><input type=\"number\" min=\"1\" max=\"99\" value=\"1\" id=\"precisionShip2\" name=\"precisionShip2\" class=\"player2\"></td>
                </tr>
                <tr>
                    <td><label>Agility Hero 2:</label></td>
                    <td><input type=\"number\" min=\"1\" max=\"99\" value=\"1\" id=\"agilityHero2\" name=\"agilityHero2\" class=\"player2\"></td>
                </tr>
                <tr>
                    <td><label>Agility Ship 2:</label></td>
                    <td><input type=\"number\" min=\"1\" max=\"99\" value=\"1\" id=\"agilityShip2\" name=\"agilityShip2\" class=\"player2\"></td>
                </tr>
                <tr>
                    <td><label>Speed 2:</label></td>
                    <td><input type=\"number\" min=\"1\" max=\"99\" value=\"1\" id=\"speed2\" name=\"speed2\" class=\"player2\"></td>
                </tr>
                <tr>
                    <td><label>HP 2:</label></td>
                    <td><input type=\"number\" min=\"100\" max=\"5000\" value=\"100\" id=\"HP2\" name=\"HP2\" class=\"player2\"></td>
                </tr>
            </table>
            </td>
            </tr>
            </table>
            <input type=\"checkbox\" id=\"fullBattle\" name=\"fullBattle\"><label for=\"fullBattle\">Cała walka</label>
            <input type=\"submit\" id=\"OK\" value=\"OK\" name=\"OK\" style=\"width: 300px\">
        </form>
        <label for=\"id1set\">Ustaw statystyki gracza 1:</label><input type=\"number\" name=\"id1set\" min=\"1\" max=\"99\" value=\"1\" id=\"player1LevelValue\"><input type=\"button\" id=\"player1LevelSet\" value=\"Ustaw\"><br/>
        <label for=\"id2set\">Ustaw statystyki gracza 2:</label><input type=\"number\" name=\"id2set\" min=\"1\" max=\"99\" value=\"1\" id=\"player2LevelValue\"><input type=\"button\" id=\"player2LevelSet\" value=\"Ustaw\"><br/>
        ";
        // line 124
        if (array_key_exists("result", $context)) {
            // line 125
            echo "            <h4>Wynik walki:</h4>
            Wygrał gracz nr: ";
            // line 126
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["result"]) ? $context["result"] : $this->getContext($context, "result")), 0, array(), "array"), 0, array(), "array"), "html", null, true);
            echo "<br/>
            Gracz nr 1 zyskał ";
            // line 127
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["result"]) ? $context["result"] : $this->getContext($context, "result")), 0, array(), "array"), 1, array(), "array"), "html", null, true);
            echo " punktów doświadczenia<br/>
            Gracz nr 2 zyskał ";
            // line 128
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["result"]) ? $context["result"] : $this->getContext($context, "result")), 0, array(), "array"), 2, array(), "array"), "html", null, true);
            echo " punktów doświadczenia<br/>
            Gracz nr 1 ma teraz ";
            // line 129
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["result"]) ? $context["result"] : $this->getContext($context, "result")), 0, array(), "array"), 3, array(), "array"), "html", null, true);
            echo " HP <br/>
            Gracz nr 2 ma teraz ";
            // line 130
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["result"]) ? $context["result"] : $this->getContext($context, "result")), 0, array(), "array"), 4, array(), "array"), "html", null, true);
            echo " HP <br/>
        ";
        }
        // line 132
        echo "        ";
        if (array_key_exists("fullBattle", $context)) {
            // line 133
            echo "            <h4>Przebieg walki:</h4>
            ";
            // line 134
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_slice($this->env, (isset($context["result"]) ? $context["result"] : $this->getContext($context, "result")), 1, twig_length_filter($this->env, (isset($context["result"]) ? $context["result"] : $this->getContext($context, "result")))));
            $context['loop'] = array(
              'parent' => $context['_parent'],
              'index0' => 0,
              'index'  => 1,
              'first'  => true,
            );
            if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
                $length = count($context['_seq']);
                $context['loop']['revindex0'] = $length - 1;
                $context['loop']['revindex'] = $length;
                $context['loop']['length'] = $length;
                $context['loop']['last'] = 1 === $length;
            }
            foreach ($context['_seq'] as $context["_key"] => $context["res"]) {
                // line 135
                echo "                <b>Tura nr ";
                echo twig_escape_filter($this->env, $this->getAttribute($context["loop"], "index", array()), "html", null, true);
                echo "</b><br/>
                Zaatakował gracz nr ";
                // line 136
                echo twig_escape_filter($this->env, $this->getAttribute($context["res"], 0, array(), "array"), "html", null, true);
                echo "<br/>
                ";
                // line 137
                if (($this->getAttribute($context["res"], 1, array(), "array") > 0)) {
                    // line 138
                    echo "                    Zadał on ";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["res"], 1, array(), "array"), "html", null, true);
                    echo " punktów obrażeń<br/>
                ";
                } else {
                    // line 140
                    echo "                    Nie trafił<br/>
                ";
                }
                // line 142
                echo "                ";
                if (($this->getAttribute($context["res"], 2, array(), "array") == true)) {
                    // line 143
                    echo "                    To był podwójny atak<br/>
                ";
                }
                // line 145
                echo "                Gracz 1 HP: ";
                echo twig_escape_filter($this->env, $this->getAttribute($context["res"], 3, array(), "array"), "html", null, true);
                echo "<br/>
                Gracz 2 HP: ";
                // line 146
                echo twig_escape_filter($this->env, $this->getAttribute($context["res"], 4, array(), "array"), "html", null, true);
                echo "<br/>
            ";
                ++$context['loop']['index0'];
                ++$context['loop']['index'];
                $context['loop']['first'] = false;
                if (isset($context['loop']['length'])) {
                    --$context['loop']['revindex0'];
                    --$context['loop']['revindex'];
                    $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['res'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 148
            echo "            <b>KONIEC WALKI</b><br/>
        ";
        }
        // line 150
        echo "        <script>
            \$('#player1LevelSet').click(function()
            {
                var val = \$('#player1LevelValue').val();
                if (val < 1 || val > 99)
                {
                    alert('Podaj wartość z przedziału 1-99');
                }
                else
                {
                    \$('.player1').val(val);
                    \$('#HP1').val(50 + 50 * val);
                }
            });
            \$('#player2LevelSet').click(function()
            {
                var val = \$('#player2LevelValue').val();
                if (val < 1 || val > 99)
                {
                    alert('Podaj wartość z przedziału 1-99');
                }
                else
                {
                    \$('.player2').val(val);
                    \$('#HP2').val(50 + 50 * val);
                }
            });
        </script>
    </body>
</html>
";
        
        $__internal_0eb76e05ec173cc74e987dd1f2ec3d7a237cb496738308e42e27d51ef0464f51->leave($__internal_0eb76e05ec173cc74e987dd1f2ec3d7a237cb496738308e42e27d51ef0464f51_prof);

    }

    public function getTemplateName()
    {
        return "testBattleEngineBundle:Default:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  252 => 150,  248 => 148,  232 => 146,  227 => 145,  223 => 143,  220 => 142,  216 => 140,  210 => 138,  208 => 137,  204 => 136,  199 => 135,  182 => 134,  179 => 133,  176 => 132,  171 => 130,  167 => 129,  163 => 128,  159 => 127,  155 => 126,  152 => 125,  150 => 124,  28 => 5,  22 => 1,);
    }
}
/* <html>*/
/*     <head>*/
/*         <meta charset="UTF-8">*/
/*         <title>Test silnika walki</title>*/
/*         <script src="{{ asset('js/jquery-2.2.2.min.js') }}"></script>*/
/*     </head>*/
/*     <body>*/
/*         <form method="POST">*/
/*             <table border="1">*/
/*             <tr>*/
/*             <td>*/
/*             <h2>Gracz 1</h2>*/
/*             <table>*/
/*                 <tr>*/
/*                     <td><label>Attack Hero 1:</label></td>*/
/*                     <td><input type="number" min="1" max="99" value="1" id="attackHero1" name="attackHero1" class="player1"></td>*/
/*                 </tr>*/
/*                 <tr>*/
/*                     <td><label>Attack Ship 1:</label></td>*/
/*                     <td><input type="number" min="1" max="99" value="1" id="attackShip1" name="attackShip1" class="player1"></td>*/
/*                 </tr>*/
/*                 <tr>*/
/*                     <td><label>Defence Hero 1:</label></td>*/
/*                     <td><input type="number" min="1" max="99" value="1" id="defenceHero1" name="defenceHero1" class="player1"></td>*/
/*                 </tr>*/
/*                 <tr>*/
/*                     <td><label>Defence Ship 1:</label></td>*/
/*                     <td><input type="number" min="1" max="99" value="1" id="defenceShip1" name="defenceShip1" class="player1"></td>*/
/*                 </tr>*/
/*                 <tr>*/
/*                     <td><label>Aggression Hero 1:</label></td>*/
/*                     <td><input type="number" min="1" max="99" value="1" id="aggressionHero1" name="aggressionHero1" class="player1"></td>*/
/*                 </tr>*/
/*                 <tr>*/
/*                     <td><label>Aggression Ship 1:</label></td>*/
/*                     <td><input type="number" min="1" max="99" value="1" id="aggressionShip1" name="aggressionShip1" class="player1"></td>*/
/*                 </tr>*/
/*                 <tr>*/
/*                     <td><label>Precision Hero 1:</label></td>*/
/*                     <td><input type="number" min="1" max="99" value="1" id="precisionHero1" name="precisionHero1" class="player1"></td>*/
/*                 </tr>*/
/*                 <tr>*/
/*                     <td><label>Precision Ship 1:</label></td>*/
/*                     <td><input type="number" min="1" max="99" value="1" id="precisionShip1" name="precisionShip1" class="player1"></td>*/
/*                 </tr>*/
/*                 <tr>*/
/*                     <td><label>Agility Hero 1:</label></td>*/
/*                     <td><input type="number" min="1" max="99" value="1" id="agilityHero1" name="agilityHero1" class="player1"></td>*/
/*                 </tr>*/
/*                 <tr>*/
/*                     <td><label>Agility Ship 1:</label></td>*/
/*                     <td><input type="number" min="1" max="99" value="1" id="agilityShip1" name="agilityShip1" class="player1"></td>*/
/*                 </tr>*/
/*                 <tr>*/
/*                     <td><label>Speed 1:</label></td>*/
/*                     <td><input type="number" min="1" max="99" value="1" id="speed1" name="speed1" class="player1"></td>*/
/*                 </tr>*/
/*                 <tr>*/
/*                     <td><label>HP 1:</label></td>*/
/*                     <td><input type="number" min="100" max="5000" value="100" id="HP1" name="HP1" class="player1"></td>*/
/*                 </tr>*/
/*             </table>*/
/*             </td>*/
/*             <td>*/
/*             <h2>Gracz 2</h2>*/
/*             <table>*/
/*                 <tr>*/
/*                     <td><label>Attack Hero 2:</label></td>*/
/*                     <td><input type="number" min="1" max="99" value="1" id="attackHero2" name="attackHero2" class="player2"></td>*/
/*                 </tr>*/
/*                 <tr>*/
/*                     <td><label>Attack Ship 2:</label></td>*/
/*                     <td><input type="number" min="1" max="99" value="1" id="attackShip2" name="attackShip2" class="player2"></td>*/
/*                 </tr>*/
/*                 <tr>*/
/*                     <td><label>Defence Hero 2:</label></td>*/
/*                     <td><input type="number" min="1" max="99" value="1" id="defenceHero2" name="defenceHero2" class="player2"></td>*/
/*                 </tr>*/
/*                 <tr>*/
/*                     <td><label>Defence Ship 2:</label></td>*/
/*                     <td><input type="number" min="1" max="99" value="1" id="defenceShip2" name="defenceShip2" class="player2"></td>*/
/*                 </tr>*/
/*                 <tr>*/
/*                     <td><label>Aggression Hero 2:</label></td>*/
/*                     <td><input type="number" min="1" max="99" value="1" id="aggressionHero2" name="aggressionHero2" class="player2"></td>*/
/*                 </tr>*/
/*                 <tr>*/
/*                     <td><label>Aggression Ship 2:</label></td>*/
/*                     <td><input type="number" min="1" max="99" value="1" id="aggressionShip2" name="aggressionShip2" class="player2"></td>*/
/*                 </tr>*/
/*                 <tr>*/
/*                     <td><label>Precision Hero 2:</label></td>*/
/*                     <td><input type="number" min="1" max="99" value="1" id="precisionHero2" name="precisionHero2" class="player2"></td>*/
/*                 </tr>*/
/*                 <tr>*/
/*                     <td><label>Precision Ship 2:</label></td>*/
/*                     <td><input type="number" min="1" max="99" value="1" id="precisionShip2" name="precisionShip2" class="player2"></td>*/
/*                 </tr>*/
/*                 <tr>*/
/*                     <td><label>Agility Hero 2:</label></td>*/
/*                     <td><input type="number" min="1" max="99" value="1" id="agilityHero2" name="agilityHero2" class="player2"></td>*/
/*                 </tr>*/
/*                 <tr>*/
/*                     <td><label>Agility Ship 2:</label></td>*/
/*                     <td><input type="number" min="1" max="99" value="1" id="agilityShip2" name="agilityShip2" class="player2"></td>*/
/*                 </tr>*/
/*                 <tr>*/
/*                     <td><label>Speed 2:</label></td>*/
/*                     <td><input type="number" min="1" max="99" value="1" id="speed2" name="speed2" class="player2"></td>*/
/*                 </tr>*/
/*                 <tr>*/
/*                     <td><label>HP 2:</label></td>*/
/*                     <td><input type="number" min="100" max="5000" value="100" id="HP2" name="HP2" class="player2"></td>*/
/*                 </tr>*/
/*             </table>*/
/*             </td>*/
/*             </tr>*/
/*             </table>*/
/*             <input type="checkbox" id="fullBattle" name="fullBattle"><label for="fullBattle">Cała walka</label>*/
/*             <input type="submit" id="OK" value="OK" name="OK" style="width: 300px">*/
/*         </form>*/
/*         <label for="id1set">Ustaw statystyki gracza 1:</label><input type="number" name="id1set" min="1" max="99" value="1" id="player1LevelValue"><input type="button" id="player1LevelSet" value="Ustaw"><br/>*/
/*         <label for="id2set">Ustaw statystyki gracza 2:</label><input type="number" name="id2set" min="1" max="99" value="1" id="player2LevelValue"><input type="button" id="player2LevelSet" value="Ustaw"><br/>*/
/*         {% if result is defined %}*/
/*             <h4>Wynik walki:</h4>*/
/*             Wygrał gracz nr: {{ result[0][0] }}<br/>*/
/*             Gracz nr 1 zyskał {{ result[0][1] }} punktów doświadczenia<br/>*/
/*             Gracz nr 2 zyskał {{ result[0][2] }} punktów doświadczenia<br/>*/
/*             Gracz nr 1 ma teraz {{ result[0][3] }} HP <br/>*/
/*             Gracz nr 2 ma teraz {{ result[0][4] }} HP <br/>*/
/*         {% endif %}*/
/*         {% if fullBattle is defined %}*/
/*             <h4>Przebieg walki:</h4>*/
/*             {% for res in result | slice(1, result|length) %}*/
/*                 <b>Tura nr {{ loop.index }}</b><br/>*/
/*                 Zaatakował gracz nr {{ res[0] }}<br/>*/
/*                 {% if res[1] > 0 %}*/
/*                     Zadał on {{ res[1] }} punktów obrażeń<br/>*/
/*                 {% else %}*/
/*                     Nie trafił<br/>*/
/*                 {% endif %}*/
/*                 {% if res[2] == true %}*/
/*                     To był podwójny atak<br/>*/
/*                 {% endif %}*/
/*                 Gracz 1 HP: {{ res[3] }}<br/>*/
/*                 Gracz 2 HP: {{ res[4] }}<br/>*/
/*             {% endfor %}*/
/*             <b>KONIEC WALKI</b><br/>*/
/*         {% endif %}*/
/*         <script>*/
/*             $('#player1LevelSet').click(function()*/
/*             {*/
/*                 var val = $('#player1LevelValue').val();*/
/*                 if (val < 1 || val > 99)*/
/*                 {*/
/*                     alert('Podaj wartość z przedziału 1-99');*/
/*                 }*/
/*                 else*/
/*                 {*/
/*                     $('.player1').val(val);*/
/*                     $('#HP1').val(50 + 50 * val);*/
/*                 }*/
/*             });*/
/*             $('#player2LevelSet').click(function()*/
/*             {*/
/*                 var val = $('#player2LevelValue').val();*/
/*                 if (val < 1 || val > 99)*/
/*                 {*/
/*                     alert('Podaj wartość z przedziału 1-99');*/
/*                 }*/
/*                 else*/
/*                 {*/
/*                     $('.player2').val(val);*/
/*                     $('#HP2').val(50 + 50 * val);*/
/*                 }*/
/*             });*/
/*         </script>*/
/*     </body>*/
/* </html>*/
/* */
