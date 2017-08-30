<?php

/* offer/index.html.twig */
class __TwigTemplate_bff78a8dc55393bc47d27274b3427ff5e4d14fb31d463a5e301414086d4616b0 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "offer/index.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_289a98b82d64b36f59b9d1c80c4c2f415dc21ad35074b40830116b67ac3b6bd9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_289a98b82d64b36f59b9d1c80c4c2f415dc21ad35074b40830116b67ac3b6bd9->enter($__internal_289a98b82d64b36f59b9d1c80c4c2f415dc21ad35074b40830116b67ac3b6bd9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "offer/index.html.twig"));

        $__internal_1f03ea0e2a7308eb571a36bc9013e28df22f7ced151a43d340a3a2e913bfa0f4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1f03ea0e2a7308eb571a36bc9013e28df22f7ced151a43d340a3a2e913bfa0f4->enter($__internal_1f03ea0e2a7308eb571a36bc9013e28df22f7ced151a43d340a3a2e913bfa0f4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "offer/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_289a98b82d64b36f59b9d1c80c4c2f415dc21ad35074b40830116b67ac3b6bd9->leave($__internal_289a98b82d64b36f59b9d1c80c4c2f415dc21ad35074b40830116b67ac3b6bd9_prof);

        
        $__internal_1f03ea0e2a7308eb571a36bc9013e28df22f7ced151a43d340a3a2e913bfa0f4->leave($__internal_1f03ea0e2a7308eb571a36bc9013e28df22f7ced151a43d340a3a2e913bfa0f4_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_ee9244d5d3a9b177a64432a37b7e20c6834345057c39c3faf7b46480dbbcf692 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ee9244d5d3a9b177a64432a37b7e20c6834345057c39c3faf7b46480dbbcf692->enter($__internal_ee9244d5d3a9b177a64432a37b7e20c6834345057c39c3faf7b46480dbbcf692_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_812120b4b95334bed33e6cdf1c202fb170fda0f2be6dc9a5d000b8dcab18175e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_812120b4b95334bed33e6cdf1c202fb170fda0f2be6dc9a5d000b8dcab18175e->enter($__internal_812120b4b95334bed33e6cdf1c202fb170fda0f2be6dc9a5d000b8dcab18175e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <div id=\"wrapper\">
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
        // line 22
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["offers"] ?? $this->getContext($context, "offers")));
        foreach ($context['_seq'] as $context["_key"] => $context["offer"]) {
            // line 23
            echo "                            <tr>
                                <td><a href=\"";
            // line 24
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("offer_show", array("id" => $this->getAttribute($context["offer"], "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["offer"], "id", array()), "html", null, true);
            echo "</a></td>
                                <td>";
            // line 25
            echo twig_escape_filter($this->env, $this->getAttribute($context["offer"], "title", array()), "html", null, true);
            echo "</td>
                                <td>";
            // line 26
            echo twig_escape_filter($this->env, $this->getAttribute($context["offer"], "description", array()), "html", null, true);
            echo "</td>
                                <td>
                                    <ul>
                                        <li>
                                            <a href=\"";
            // line 30
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("offer_show", array("id" => $this->getAttribute($context["offer"], "id", array()))), "html", null, true);
            echo "\">show</a>
                                        </li>
                                        <li>
                                            <a href=\"";
            // line 33
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
        // line 39
        echo "                    </tbody>
                </table>
            </div>
            <ul>
                <li>
                    <a href=\"";
        // line 44
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("offer_new");
        echo "\">Create a new offer</a>
                </li>
                <li>
                    <a href=\"";
        // line 47
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("area_export", array("_format" => "xml"));
        echo "\"> export xml</a>
                </li>
                <li>
                    <a href=\"";
        // line 50
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("area_export", array("_format" => "csv"));
        echo "\"> export csv</a>
                </li>
                <li>
                    <a href=\"";
        // line 53
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("area_export", array("_format" => "xls"));
        echo "\"> export xls</a>
                </li>
            </ul>
        </div>
    </div>

";
        
        $__internal_812120b4b95334bed33e6cdf1c202fb170fda0f2be6dc9a5d000b8dcab18175e->leave($__internal_812120b4b95334bed33e6cdf1c202fb170fda0f2be6dc9a5d000b8dcab18175e_prof);

        
        $__internal_ee9244d5d3a9b177a64432a37b7e20c6834345057c39c3faf7b46480dbbcf692->leave($__internal_ee9244d5d3a9b177a64432a37b7e20c6834345057c39c3faf7b46480dbbcf692_prof);

    }

    public function getTemplateName()
    {
        return "offer/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  136 => 53,  130 => 50,  124 => 47,  118 => 44,  111 => 39,  99 => 33,  93 => 30,  86 => 26,  82 => 25,  76 => 24,  73 => 23,  69 => 22,  49 => 4,  40 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'base.html.twig' %}

{% block body %}
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
            <ul>
                <li>
                    <a href=\"{{ path('offer_new') }}\">Create a new offer</a>
                </li>
                <li>
                    <a href=\"{{ path('area_export', { '_format': \"xml\" }) }}\"> export xml</a>
                </li>
                <li>
                    <a href=\"{{ path('area_export', { '_format': \"csv\" }) }}\"> export csv</a>
                </li>
                <li>
                    <a href=\"{{ path('area_export', { '_format': \"xls\" }) }}\"> export xls</a>
                </li>
            </ul>
        </div>
    </div>

{% endblock %}
", "offer/index.html.twig", "/var/www/html/proyectos/test_Blue_Day_Solutions/app/Resources/views/offer/index.html.twig");
    }
}
