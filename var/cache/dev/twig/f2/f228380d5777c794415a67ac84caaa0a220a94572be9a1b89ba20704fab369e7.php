<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_4474101226d255a74a7722c10385d40bcfba8957126e175f8449abe3558173aa extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_833fe1d1ba3a3bd8393a2e6ec82bb9ee2bc527277df0e73696a14ae26e7791cf = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_833fe1d1ba3a3bd8393a2e6ec82bb9ee2bc527277df0e73696a14ae26e7791cf->enter($__internal_833fe1d1ba3a3bd8393a2e6ec82bb9ee2bc527277df0e73696a14ae26e7791cf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $__internal_02a4282ef9f012832d9880ff9cc7452fe9730c62173a0bba82c38649300927fa = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_02a4282ef9f012832d9880ff9cc7452fe9730c62173a0bba82c38649300927fa->enter($__internal_02a4282ef9f012832d9880ff9cc7452fe9730c62173a0bba82c38649300927fa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_833fe1d1ba3a3bd8393a2e6ec82bb9ee2bc527277df0e73696a14ae26e7791cf->leave($__internal_833fe1d1ba3a3bd8393a2e6ec82bb9ee2bc527277df0e73696a14ae26e7791cf_prof);

        
        $__internal_02a4282ef9f012832d9880ff9cc7452fe9730c62173a0bba82c38649300927fa->leave($__internal_02a4282ef9f012832d9880ff9cc7452fe9730c62173a0bba82c38649300927fa_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_a9f973f5afae3543b6567d9d7953fc8b45be3d78c23b91e88e69fd02606c74dc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a9f973f5afae3543b6567d9d7953fc8b45be3d78c23b91e88e69fd02606c74dc->enter($__internal_a9f973f5afae3543b6567d9d7953fc8b45be3d78c23b91e88e69fd02606c74dc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_89eefc56fc7a89955916edadda403171fbd0f90da86cf8e8a40c51733a5bc07f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_89eefc56fc7a89955916edadda403171fbd0f90da86cf8e8a40c51733a5bc07f->enter($__internal_89eefc56fc7a89955916edadda403171fbd0f90da86cf8e8a40c51733a5bc07f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_89eefc56fc7a89955916edadda403171fbd0f90da86cf8e8a40c51733a5bc07f->leave($__internal_89eefc56fc7a89955916edadda403171fbd0f90da86cf8e8a40c51733a5bc07f_prof);

        
        $__internal_a9f973f5afae3543b6567d9d7953fc8b45be3d78c23b91e88e69fd02606c74dc->leave($__internal_a9f973f5afae3543b6567d9d7953fc8b45be3d78c23b91e88e69fd02606c74dc_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_2f73954e00560f9ed228a9b9e859aa1b19c5073fd4386d2c8033b3deceb65202 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2f73954e00560f9ed228a9b9e859aa1b19c5073fd4386d2c8033b3deceb65202->enter($__internal_2f73954e00560f9ed228a9b9e859aa1b19c5073fd4386d2c8033b3deceb65202_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_e3c2731dbed4edd7ccd3d8cd3a7ce0885ee6083eeabc1cd2fff5c1b4e8caa3fa = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e3c2731dbed4edd7ccd3d8cd3a7ce0885ee6083eeabc1cd2fff5c1b4e8caa3fa->enter($__internal_e3c2731dbed4edd7ccd3d8cd3a7ce0885ee6083eeabc1cd2fff5c1b4e8caa3fa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_e3c2731dbed4edd7ccd3d8cd3a7ce0885ee6083eeabc1cd2fff5c1b4e8caa3fa->leave($__internal_e3c2731dbed4edd7ccd3d8cd3a7ce0885ee6083eeabc1cd2fff5c1b4e8caa3fa_prof);

        
        $__internal_2f73954e00560f9ed228a9b9e859aa1b19c5073fd4386d2c8033b3deceb65202->leave($__internal_2f73954e00560f9ed228a9b9e859aa1b19c5073fd4386d2c8033b3deceb65202_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_cf2f79c1c5eef79befa4733de6e5135cf88721c00e60ea892ebf41fc30731aa5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cf2f79c1c5eef79befa4733de6e5135cf88721c00e60ea892ebf41fc30731aa5->enter($__internal_cf2f79c1c5eef79befa4733de6e5135cf88721c00e60ea892ebf41fc30731aa5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_ed2b6416b351fecfb84e2629445dd38440d4e213e8d601a91a951fc44deedf77 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ed2b6416b351fecfb84e2629445dd38440d4e213e8d601a91a951fc44deedf77->enter($__internal_ed2b6416b351fecfb84e2629445dd38440d4e213e8d601a91a951fc44deedf77_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_ed2b6416b351fecfb84e2629445dd38440d4e213e8d601a91a951fc44deedf77->leave($__internal_ed2b6416b351fecfb84e2629445dd38440d4e213e8d601a91a951fc44deedf77_prof);

        
        $__internal_cf2f79c1c5eef79befa4733de6e5135cf88721c00e60ea892ebf41fc30731aa5->leave($__internal_cf2f79c1c5eef79befa4733de6e5135cf88721c00e60ea892ebf41fc30731aa5_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  94 => 13,  85 => 12,  71 => 7,  68 => 6,  59 => 5,  42 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% block toolbar %}{% endblock %}

{% block menu %}
<span class=\"label\">
    <span class=\"icon\">{{ include('@WebProfiler/Icon/router.svg') }}</span>
    <strong>Routing</strong>
</span>
{% endblock %}

{% block panel %}
    {{ render(path('_profiler_router', { token: token })) }}
{% endblock %}
", "@WebProfiler/Collector/router.html.twig", "/var/www/html/proyectos/test_Blue_Day_Solutions/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/router.html.twig");
    }
}
