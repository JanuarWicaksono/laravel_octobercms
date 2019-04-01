<?php

/* D:\xampp\htdocs\laravel_octobercms/plugins/devinx/contactus/components/contactform/default.htm */
class __TwigTemplate_4c6a977786c08bd71b1b097b37e7751db3ccf3cc695658aec316e3078574f241 extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        // line 1
        echo "<div class=\"confirm-container\">
    <!--This will contain the confirmation when the email is successfully sent-->
</div>
<form class=\"ContactUsForm\" role=\"form\"
      data-request=\"";
        // line 5
        echo twig_escape_filter($this->env, ($context["__SELF__"] ?? null), "html", null, true);
        echo "::onMailSent\"
      data-request-update=\"'";
        // line 6
        echo twig_escape_filter($this->env, ($context["__SELF__"] ?? null), "html", null, true);
        echo "::confirm': '.confirm-container'\">

    <div class=\"form-groups\">
        <div class=\"form-group\">
            <input type=\"text\" class=\"form-control\" value=\"\"  name=\"name\" placeholder=\"";
        // line 10
        echo twig_escape_filter($this->env, ($context["name_input"] ?? null), "html", null, true);
        echo "\">
        </div>
        <div class=\"form-group\">
            <input type=\"text\" class=\"form-control\" value=\"\" name=\"email\" placeholder=\"";
        // line 13
        echo twig_escape_filter($this->env, ($context["email_input"] ?? null), "html", null, true);
        echo "\">
        </div>
        <div class=\"form-group\">
            <input type=\"text\" class=\"form-control\" value=\"\" name=\"subject\" placeholder=\"";
        // line 16
        echo twig_escape_filter($this->env, ($context["subject_input"] ?? null), "html", null, true);
        echo "\">
        </div>
        <div class=\"form-group\">
            <textarea class=\"form-control\" value=\"\" name=\"body\" placeholder=\"";
        // line 19
        echo twig_escape_filter($this->env, ($context["message_input"] ?? null), "html", null, true);
        echo "\" cols=\"30\" rows=\"10\"></textarea>
        </div>
        ";
        // line 21
        if (twig_get_attribute($this->env, $this->source, ($context["__SELF__"] ?? null), "enableCaptcha", [])) {
            // line 22
            echo "            <div class=\"form-group\">
                <div class=\"g-recaptcha\" data-sitekey=\"";
            // line 23
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["__SELF__"] ?? null), "siteKey", []), "html", null, true);
            echo "\"></div>
            </div>
        ";
        }
        // line 26
        echo "        <button type=\"submit\" class=\"btn btn-primary btn-lg pull-right\">";
        echo twig_escape_filter($this->env, ($context["send_button"] ?? null), "html", null, true);
        echo "</button>
    </div>
</form>
";
    }

    public function getTemplateName()
    {
        return "D:\\xampp\\htdocs\\laravel_octobercms/plugins/devinx/contactus/components/contactform/default.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  74 => 26,  68 => 23,  65 => 22,  63 => 21,  58 => 19,  52 => 16,  46 => 13,  40 => 10,  33 => 6,  29 => 5,  23 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div class=\"confirm-container\">
    <!--This will contain the confirmation when the email is successfully sent-->
</div>
<form class=\"ContactUsForm\" role=\"form\"
      data-request=\"{{ __SELF__ }}::onMailSent\"
      data-request-update=\"'{{ __SELF__ }}::confirm': '.confirm-container'\">

    <div class=\"form-groups\">
        <div class=\"form-group\">
            <input type=\"text\" class=\"form-control\" value=\"\"  name=\"name\" placeholder=\"{{name_input}}\">
        </div>
        <div class=\"form-group\">
            <input type=\"text\" class=\"form-control\" value=\"\" name=\"email\" placeholder=\"{{email_input}}\">
        </div>
        <div class=\"form-group\">
            <input type=\"text\" class=\"form-control\" value=\"\" name=\"subject\" placeholder=\"{{subject_input}}\">
        </div>
        <div class=\"form-group\">
            <textarea class=\"form-control\" value=\"\" name=\"body\" placeholder=\"{{message_input}}\" cols=\"30\" rows=\"10\"></textarea>
        </div>
        {% if __SELF__.enableCaptcha %}
            <div class=\"form-group\">
                <div class=\"g-recaptcha\" data-sitekey=\"{{ __SELF__.siteKey }}\"></div>
            </div>
        {% endif %}
        <button type=\"submit\" class=\"btn btn-primary btn-lg pull-right\">{{send_button}}</button>
    </div>
</form>
", "D:\\xampp\\htdocs\\laravel_octobercms/plugins/devinx/contactus/components/contactform/default.htm", "");
    }
}
