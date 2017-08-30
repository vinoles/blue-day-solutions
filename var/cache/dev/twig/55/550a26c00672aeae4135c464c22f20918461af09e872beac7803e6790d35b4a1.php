<?php

/* offer/area_json.html.twig */
class __TwigTemplate_1a97c23269e81ae1fab4200731b1a13ef490d456231af2f6624f5da447e118a8 extends Twig_Template
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
        $__internal_fe6aba27b9db118427b3e2950110289f8a379f5033ebd7657363fa7605a9edf4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fe6aba27b9db118427b3e2950110289f8a379f5033ebd7657363fa7605a9edf4->enter($__internal_fe6aba27b9db118427b3e2950110289f8a379f5033ebd7657363fa7605a9edf4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "offer/area_json.html.twig"));

        $__internal_422517354e0f35c0c5b1405d22fdec719bf700e3412bfbb4336088a725319bc7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_422517354e0f35c0c5b1405d22fdec719bf700e3412bfbb4336088a725319bc7->enter($__internal_422517354e0f35c0c5b1405d22fdec719bf700e3412bfbb4336088a725319bc7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "offer/area_json.html.twig"));

        // line 2
        echo "<div id=\"wrapper\">
    <div id=\"container\">
        <div id=\"welcome\">
            <h1>Offers list</h1>
        </div>

        <div id=\"status\">

            <table>
                <thead>
                    <tr>
                        <th>Id</th>
                        <th>Title</th>
                        <th>Description</th>
                    </tr>
                </thead>
                <tbody>
                    ";
        // line 19
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["offers"] ?? $this->getContext($context, "offers")));
        foreach ($context['_seq'] as $context["_key"] => $context["offer"]) {
            // line 20
            echo "                        <tr>
                            <td><a href=\"";
            // line 21
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("offer_show", array("id" => $this->getAttribute($context["offer"], "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["offer"], "id", array()), "html", null, true);
            echo "</a></td>
                            <td>";
            // line 22
            echo twig_escape_filter($this->env, $this->getAttribute($context["offer"], "title", array()), "html", null, true);
            echo "</td>
                            <td>";
            // line 23
            echo twig_escape_filter($this->env, $this->getAttribute($context["offer"], "description", array()), "html", null, true);
            echo "</td>
                        </tr>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['offer'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 26
        echo "                </tbody>
            </table>
        </div>
    </div>
</div>";
        
        $__internal_fe6aba27b9db118427b3e2950110289f8a379f5033ebd7657363fa7605a9edf4->leave($__internal_fe6aba27b9db118427b3e2950110289f8a379f5033ebd7657363fa7605a9edf4_prof);

        
        $__internal_422517354e0f35c0c5b1405d22fdec719bf700e3412bfbb4336088a725319bc7->leave($__internal_422517354e0f35c0c5b1405d22fdec719bf700e3412bfbb4336088a725319bc7_prof);

    }

    public function getTemplateName()
    {
        return "offer/area_json.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  70 => 26,  61 => 23,  57 => 22,  51 => 21,  48 => 20,  44 => 19,  25 => 2,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{# empty Twig template #}
<div id=\"wrapper\">
    <div id=\"container\">
        <div id=\"welcome\">
            <h1>Offers list</h1>
        </div>

        <div id=\"status\">

            <table>
                <thead>
                    <tr>
                        <th>Id</th>
                        <th>Title</th>
                        <th>Description</th>
                    </tr>
                </thead>
                <tbody>
                    {% for offer in offers %}
                        <tr>
                            <td><a href=\"{{ path('offer_show', { 'id': offer.id }) }}\">{{ offer.id }}</a></td>
                            <td>{{ offer.title }}</td>
                            <td>{{ offer.description }}</td>
                        </tr>
                    {% endfor %}
                </tbody>
            </table>
        </div>
    </div>
</div>", "offer/area_json.html.twig", "/var/www/html/proyectos/test_Blue_Day_Solutions/app/Resources/views/offer/area_json.html.twig");
    }
}
