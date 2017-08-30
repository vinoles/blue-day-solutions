<?php

/* @Twig/Exception/traces.xml.twig */
class __TwigTemplate_58f482e80d81a8d82618b132a63d527961c6902fb254e84dcaf76cf1bb6dc008 extends Twig_Template
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
        $__internal_6c9ed8efe52e1eb60db0548ec3afe8d4e5198ffb836bde5e2c26843dae358a94 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6c9ed8efe52e1eb60db0548ec3afe8d4e5198ffb836bde5e2c26843dae358a94->enter($__internal_6c9ed8efe52e1eb60db0548ec3afe8d4e5198ffb836bde5e2c26843dae358a94_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/traces.xml.twig"));

        $__internal_4d69a4f03dd326d0c9d57d34a8c8bdac2e9f3445ab400a8a9c0b23bd0e1d0315 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4d69a4f03dd326d0c9d57d34a8c8bdac2e9f3445ab400a8a9c0b23bd0e1d0315->enter($__internal_4d69a4f03dd326d0c9d57d34a8c8bdac2e9f3445ab400a8a9c0b23bd0e1d0315_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/traces.xml.twig"));

        // line 1
        echo "        <traces>
";
        // line 2
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["exception"] ?? $this->getContext($context, "exception")), "trace", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["trace"]) {
            // line 3
            echo "            <trace>
";
            // line 4
            echo twig_include($this->env, $context, "@Twig/Exception/trace.txt.twig", array("trace" => $context["trace"]), false);
            echo "

            </trace>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['trace'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 8
        echo "        </traces>
";
        
        $__internal_6c9ed8efe52e1eb60db0548ec3afe8d4e5198ffb836bde5e2c26843dae358a94->leave($__internal_6c9ed8efe52e1eb60db0548ec3afe8d4e5198ffb836bde5e2c26843dae358a94_prof);

        
        $__internal_4d69a4f03dd326d0c9d57d34a8c8bdac2e9f3445ab400a8a9c0b23bd0e1d0315->leave($__internal_4d69a4f03dd326d0c9d57d34a8c8bdac2e9f3445ab400a8a9c0b23bd0e1d0315_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/traces.xml.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  45 => 8,  35 => 4,  32 => 3,  28 => 2,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("        <traces>
{% for trace in exception.trace %}
            <trace>
{{ include('@Twig/Exception/trace.txt.twig', { trace: trace }, with_context = false) }}

            </trace>
{% endfor %}
        </traces>
", "@Twig/Exception/traces.xml.twig", "/var/www/html/proyectos/test_Blue_Day_Solutions/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/traces.xml.twig");
    }
}
