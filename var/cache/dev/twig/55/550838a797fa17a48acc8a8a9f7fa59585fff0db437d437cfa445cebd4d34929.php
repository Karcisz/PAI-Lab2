<?php

/* ::base.html.twig */
class __TwigTemplate_7cb8f89ee6e34839171e3d38c45dd10f9410fd435bde33a95b0dc84828c3d41d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_eed2fb3658cc80c027b5992f2e2baf4b33dedb348fd7719c24caa225c932dab6 = $this->env->getExtension("native_profiler");
        $__internal_eed2fb3658cc80c027b5992f2e2baf4b33dedb348fd7719c24caa225c932dab6->enter($__internal_eed2fb3658cc80c027b5992f2e2baf4b33dedb348fd7719c24caa225c932dab6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 6
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 7
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    </head>
    <body>
        ";
        // line 10
        $this->displayBlock('body', $context, $blocks);
        // line 11
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 12
        echo "    </body>
</html>
";
        
        $__internal_eed2fb3658cc80c027b5992f2e2baf4b33dedb348fd7719c24caa225c932dab6->leave($__internal_eed2fb3658cc80c027b5992f2e2baf4b33dedb348fd7719c24caa225c932dab6_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_112b772a1a997f61a83e32c690ea0d7fcbd283894879519ec42b9bde4b99b349 = $this->env->getExtension("native_profiler");
        $__internal_112b772a1a997f61a83e32c690ea0d7fcbd283894879519ec42b9bde4b99b349->enter($__internal_112b772a1a997f61a83e32c690ea0d7fcbd283894879519ec42b9bde4b99b349_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_112b772a1a997f61a83e32c690ea0d7fcbd283894879519ec42b9bde4b99b349->leave($__internal_112b772a1a997f61a83e32c690ea0d7fcbd283894879519ec42b9bde4b99b349_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_0b2dd28fcac8f4a18d080ef13ec417f2563ffbf50f710e2cd1e060f763c7eda6 = $this->env->getExtension("native_profiler");
        $__internal_0b2dd28fcac8f4a18d080ef13ec417f2563ffbf50f710e2cd1e060f763c7eda6->enter($__internal_0b2dd28fcac8f4a18d080ef13ec417f2563ffbf50f710e2cd1e060f763c7eda6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_0b2dd28fcac8f4a18d080ef13ec417f2563ffbf50f710e2cd1e060f763c7eda6->leave($__internal_0b2dd28fcac8f4a18d080ef13ec417f2563ffbf50f710e2cd1e060f763c7eda6_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_5bc32e1a8518ac748f8d6cc96ff0b6874eb2411a9edbc3a0ff5c88ff938aab4b = $this->env->getExtension("native_profiler");
        $__internal_5bc32e1a8518ac748f8d6cc96ff0b6874eb2411a9edbc3a0ff5c88ff938aab4b->enter($__internal_5bc32e1a8518ac748f8d6cc96ff0b6874eb2411a9edbc3a0ff5c88ff938aab4b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_5bc32e1a8518ac748f8d6cc96ff0b6874eb2411a9edbc3a0ff5c88ff938aab4b->leave($__internal_5bc32e1a8518ac748f8d6cc96ff0b6874eb2411a9edbc3a0ff5c88ff938aab4b_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_946ddbf6f971848c09386ee07182ea111e6ebc609b45de1e1c554898e5e9e28b = $this->env->getExtension("native_profiler");
        $__internal_946ddbf6f971848c09386ee07182ea111e6ebc609b45de1e1c554898e5e9e28b->enter($__internal_946ddbf6f971848c09386ee07182ea111e6ebc609b45de1e1c554898e5e9e28b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_946ddbf6f971848c09386ee07182ea111e6ebc609b45de1e1c554898e5e9e28b->leave($__internal_946ddbf6f971848c09386ee07182ea111e6ebc609b45de1e1c554898e5e9e28b_prof);

    }

    public function getTemplateName()
    {
        return "::base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  93 => 11,  82 => 10,  71 => 6,  59 => 5,  50 => 12,  47 => 11,  45 => 10,  38 => 7,  36 => 6,  32 => 5,  26 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <html>*/
/*     <head>*/
/*         <meta charset="UTF-8" />*/
/*         <title>{% block title %}Welcome!{% endblock %}</title>*/
/*         {% block stylesheets %}{% endblock %}*/
/*         <link rel="icon" type="image/x-icon" href="{{ asset('favicon.ico') }}" />*/
/*     </head>*/
/*     <body>*/
/*         {% block body %}{% endblock %}*/
/*         {% block javascripts %}{% endblock %}*/
/*     </body>*/
/* </html>*/
/* */
