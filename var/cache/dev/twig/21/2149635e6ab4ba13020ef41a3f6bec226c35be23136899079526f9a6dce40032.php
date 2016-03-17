<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_ac28db74f1d1930831687267aafd634d612d213d974250129153907451350684 extends Twig_Template
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
        $__internal_dac19d61e0bc11a39c62bcd68fb370774dc0b20eba0878f46f5b642ca9fc2a89 = $this->env->getExtension("native_profiler");
        $__internal_dac19d61e0bc11a39c62bcd68fb370774dc0b20eba0878f46f5b642ca9fc2a89->enter($__internal_dac19d61e0bc11a39c62bcd68fb370774dc0b20eba0878f46f5b642ca9fc2a89_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_dac19d61e0bc11a39c62bcd68fb370774dc0b20eba0878f46f5b642ca9fc2a89->leave($__internal_dac19d61e0bc11a39c62bcd68fb370774dc0b20eba0878f46f5b642ca9fc2a89_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_5cffb0d9c88b94d2ff910032cd8054e40135543b750a1e1f9590c6b874d4e4ea = $this->env->getExtension("native_profiler");
        $__internal_5cffb0d9c88b94d2ff910032cd8054e40135543b750a1e1f9590c6b874d4e4ea->enter($__internal_5cffb0d9c88b94d2ff910032cd8054e40135543b750a1e1f9590c6b874d4e4ea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_5cffb0d9c88b94d2ff910032cd8054e40135543b750a1e1f9590c6b874d4e4ea->leave($__internal_5cffb0d9c88b94d2ff910032cd8054e40135543b750a1e1f9590c6b874d4e4ea_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_42c1a99efefb48faea65f364cd49db948bfc09464fbcea3da670b1f39be01c8a = $this->env->getExtension("native_profiler");
        $__internal_42c1a99efefb48faea65f364cd49db948bfc09464fbcea3da670b1f39be01c8a->enter($__internal_42c1a99efefb48faea65f364cd49db948bfc09464fbcea3da670b1f39be01c8a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_42c1a99efefb48faea65f364cd49db948bfc09464fbcea3da670b1f39be01c8a->leave($__internal_42c1a99efefb48faea65f364cd49db948bfc09464fbcea3da670b1f39be01c8a_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_c1cfc83e8188046084543c9abb0174c1b71b9fd694420f0317124c392f39fdd6 = $this->env->getExtension("native_profiler");
        $__internal_c1cfc83e8188046084543c9abb0174c1b71b9fd694420f0317124c392f39fdd6->enter($__internal_c1cfc83e8188046084543c9abb0174c1b71b9fd694420f0317124c392f39fdd6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_c1cfc83e8188046084543c9abb0174c1b71b9fd694420f0317124c392f39fdd6->leave($__internal_c1cfc83e8188046084543c9abb0174c1b71b9fd694420f0317124c392f39fdd6_prof);

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
        return array (  73 => 13,  67 => 12,  56 => 7,  53 => 6,  47 => 5,  36 => 3,  11 => 1,);
    }
}
/* {% extends '@WebProfiler/Profiler/layout.html.twig' %}*/
/* */
/* {% block toolbar %}{% endblock %}*/
/* */
/* {% block menu %}*/
/* <span class="label">*/
/*     <span class="icon">{{ include('@WebProfiler/Icon/router.svg') }}</span>*/
/*     <strong>Routing</strong>*/
/* </span>*/
/* {% endblock %}*/
/* */
/* {% block panel %}*/
/*     {{ render(path('_profiler_router', { token: token })) }}*/
/* {% endblock %}*/
/* */
