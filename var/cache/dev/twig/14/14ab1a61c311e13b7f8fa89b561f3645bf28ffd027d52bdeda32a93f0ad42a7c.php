<?php

/* offer/area_xls.html.twig */
class __TwigTemplate_3a6ea4268e3b2b6880d448494a18ab727927fcec167d24f58d539d7ce4e4732d extends Twig_Template
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
        $__internal_4e1265461628897ef6afa134b4070ab928f2f6b336ec80530d70733d50008393 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4e1265461628897ef6afa134b4070ab928f2f6b336ec80530d70733d50008393->enter($__internal_4e1265461628897ef6afa134b4070ab928f2f6b336ec80530d70733d50008393_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "offer/area_xls.html.twig"));

        $__internal_bc58c83b2082a3c7c81af0cc86e26ddd57bafa727e06dc639f0b3fd1573438f4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bc58c83b2082a3c7c81af0cc86e26ddd57bafa727e06dc639f0b3fd1573438f4->enter($__internal_bc58c83b2082a3c7c81af0cc86e26ddd57bafa727e06dc639f0b3fd1573438f4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "offer/area_xls.html.twig"));

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
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    ";
        // line 20
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["offers"] ?? $this->getContext($context, "offers")));
        foreach ($context['_seq'] as $context["_key"] => $context["offer"]) {
            // line 21
            echo "                        <tr>
                            <td><a href=\"";
            // line 22
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("offer_show", array("id" => $this->getAttribute($context["offer"], "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["offer"], "id", array()), "html", null, true);
            echo "</a></td>
                            <td>";
            // line 23
            echo twig_escape_filter($this->env, $this->getAttribute($context["offer"], "title", array()), "html", null, true);
            echo "</td>
                            <td>";
            // line 24
            echo twig_escape_filter($this->env, $this->getAttribute($context["offer"], "description", array()), "html", null, true);
            echo "</td>
                            <td>
                                <ul>
                                    <li>
                                        <a href=\"";
            // line 28
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("offer_show", array("id" => $this->getAttribute($context["offer"], "id", array()))), "html", null, true);
            echo "\">show</a>
                                    </li>
                                    <li>
                                        <a href=\"";
            // line 31
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("offer_edit", array("id" => $this->getAttribute($context["offer"], "id", array()))), "html", null, true);
            echo "\">edit</a>
                                    </li>

                                </ul>
                            </td>
                        </tr>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['offer'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 38
        echo "                </tbody>
            </table>
        </div>
    </div>
</div>";
        
        $__internal_4e1265461628897ef6afa134b4070ab928f2f6b336ec80530d70733d50008393->leave($__internal_4e1265461628897ef6afa134b4070ab928f2f6b336ec80530d70733d50008393_prof);

        
        $__internal_bc58c83b2082a3c7c81af0cc86e26ddd57bafa727e06dc639f0b3fd1573438f4->leave($__internal_bc58c83b2082a3c7c81af0cc86e26ddd57bafa727e06dc639f0b3fd1573438f4_prof);

    }

    public function getTemplateName()
    {
        return "offer/area_xls.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  88 => 38,  75 => 31,  69 => 28,  62 => 24,  58 => 23,  52 => 22,  49 => 21,  45 => 20,  25 => 2,);
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
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    {% for offer in offers %}
                        <tr>
                            <td><a href=\"{{ path('offer_show', { 'id': offer.id }) }}\">{{ offer.id }}</a></td>
                            <td>{{ offer.title }}</td>
                            <td>{{ offer.description }}</td>
                            <td>
                                <ul>
                                    <li>
                                        <a href=\"{{ path('offer_show', { 'id': offer.id }) }}\">show</a>
                                    </li>
                                    <li>
                                        <a href=\"{{ path('offer_edit', { 'id': offer.id }) }}\">edit</a>
                                    </li>

                                </ul>
                            </td>
                        </tr>
                    {% endfor %}
                </tbody>
            </table>
        </div>
    </div>
</div>", "offer/area_xls.html.twig", "/var/www/html/proyectos/test_Blue_Day_Solutions/app/Resources/views/offer/area_xls.html.twig");
    }
}
