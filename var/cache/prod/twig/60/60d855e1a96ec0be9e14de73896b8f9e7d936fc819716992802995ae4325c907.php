<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* @PrestaShop/Admin/Improve/Design/MailTheme/index.html.twig */
class __TwigTemplate_33b0692585529f3b479a7a00b81c6f5f1d21ac98403ac2ca9705469ef7d00e46 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        // line 26
        $this->parent = $this->loadTemplate("@PrestaShop/Admin/layout.html.twig", "@PrestaShop/Admin/Improve/Design/MailTheme/index.html.twig", 26);
        $this->blocks = [
            'content' => [$this, 'block_content'],
        ];
    }

    protected function doGetParent(array $context)
    {
        return "@PrestaShop/Admin/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 28
    public function block_content($context, array $blocks = [])
    {
        // line 29
        echo "  ";
        echo twig_include($this->env, $context, "@PrestaShop/Admin/Improve/Design/MailTheme/Blocks/configuration_form.html.twig", ["mailThemeConfigurationForm" =>         // line 31
($context["mailThemeConfigurationForm"] ?? null)]);
        // line 33
        echo "

  ";
        // line 35
        echo twig_include($this->env, $context, "@PrestaShop/Admin/Improve/Design/MailTheme/Blocks/generate_mails_form.html.twig", ["generateMailsForm" =>         // line 37
($context["generateMailsForm"] ?? null)]);
        // line 39
        echo "

  ";
        // line 41
        echo twig_include($this->env, $context, "@PrestaShop/Admin/Improve/Design/MailTheme/Blocks/list_mail_themes.html.twig", ["mailThemes" =>         // line 43
($context["mailThemes"] ?? null)]);
        // line 45
        echo "
";
    }

    public function getTemplateName()
    {
        return "@PrestaShop/Admin/Improve/Design/MailTheme/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  60 => 45,  58 => 43,  57 => 41,  53 => 39,  51 => 37,  50 => 35,  46 => 33,  44 => 31,  42 => 29,  39 => 28,  22 => 26,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "@PrestaShop/Admin/Improve/Design/MailTheme/index.html.twig", "/usr/home/rzi/domains/presta.ct8.pl/public_html/src/PrestaShopBundle/Resources/views/Admin/Improve/Design/MailTheme/index.html.twig");
    }
}
