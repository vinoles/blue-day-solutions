<?php

/* offer/area_xml.html.xml */
class __TwigTemplate_619bad8cc76d4714c6b1eac285f9dac468ce0cc56449e0f36390f93d993d491b extends Twig_Template
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
        $__internal_edd8609b82f552ee8ebd0b232870f52c072707c99690b90fe2575b5044f01381 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_edd8609b82f552ee8ebd0b232870f52c072707c99690b90fe2575b5044f01381->enter($__internal_edd8609b82f552ee8ebd0b232870f52c072707c99690b90fe2575b5044f01381_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "offer/area_xml.html.xml"));

        $__internal_f36a85a4feb50e395e4c2fd6efdb06d144fb3655d4eed45648350db74b23bad1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f36a85a4feb50e395e4c2fd6efdb06d144fb3655d4eed45648350db74b23bad1->enter($__internal_f36a85a4feb50e395e4c2fd6efdb06d144fb3655d4eed45648350db74b23bad1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "offer/area_xml.html.xml"));

        // line 1
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
        // line 18
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["offers"] ?? $this->getContext($context, "offers")));
        foreach ($context['_seq'] as $context["_key"] => $context["offer"]) {
            // line 19
            echo "                        <tr>
                            <td><a href=\"";
            // line 20
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("offer_show", array("id" => $this->getAttribute($context["offer"], "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["offer"], "id", array()), "html", null, true);
            echo "</a></td>
                            <td>";
            // line 21
            echo twig_escape_filter($this->env, $this->getAttribute($context["offer"], "title", array()), "html", null, true);
            echo "</td>
                            <td>";
            // line 22
            echo twig_escape_filter($this->env, $this->getAttribute($context["offer"], "description", array()), "html", null, true);
            echo "</td>
                        </tr>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['offer'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 25
        echo "                </tbody>
            </table>
        </div>
    </div>
</div>";
        
        $__internal_edd8609b82f552ee8ebd0b232870f52c072707c99690b90fe2575b5044f01381->leave($__internal_edd8609b82f552ee8ebd0b232870f52c072707c99690b90fe2575b5044f01381_prof);

        
        $__internal_f36a85a4feb50e395e4c2fd6efdb06d144fb3655d4eed45648350db74b23bad1->leave($__internal_f36a85a4feb50e395e4c2fd6efdb06d144fb3655d4eed45648350db74b23bad1_prof);

    }

    public function getTemplateName()
    {
        return "offer/area_xml.html.xml";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  70 => 25,  61 => 22,  57 => 21,  51 => 20,  48 => 19,  44 => 18,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div id=\"wrapper\">
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
</div>", "offer/area_xml.html.xml", "/var/www/html/proyectos/test_Blue_Day_Solutions/app/Resources/views/offer/area_xml.html.xml");
    }
}
