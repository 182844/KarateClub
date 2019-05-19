<?php

/* vika/Sponsorindex.html.twig */
class __TwigTemplate_aa1a5d5933452cc1d3f9a7cb3d051478c31518a586f9f48609525a6a90822f8b extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "vika/Sponsorindex.html.twig", 1);
        $this->blocks = [
            'Body' => [$this, 'block_Body'],
        ];
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "vika/Sponsorindex.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "vika/Sponsorindex.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_Body($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "Body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "Body"));

        // line 4
        echo "<h2>";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["contentPage"]) || array_key_exists("contentPage", $context) ? $context["contentPage"] : (function () { throw new Twig_Error_Runtime('Variable "contentPage" does not exist.', 4, $this->source); })()), "title", []), "html", null, true);
        echo "</h2>

        <div class=\"row justify-content-md-center\">
            <div class=\"col-12\">
                    <div class=\"card\">
                        <div class=\"card-body\">
                        <p class=\"card-text\"> 
                                ";
        // line 11
        echo twig_get_attribute($this->env, $this->source, (isset($context["contentPage"]) || array_key_exists("contentPage", $context) ? $context["contentPage"] : (function () { throw new Twig_Error_Runtime('Variable "contentPage" does not exist.', 11, $this->source); })()), "content", []);
        echo "                            
                        </p>
                        ";
        // line 13
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN")) {
            // line 14
            echo "                        <div class=\"row\">
                            <div class=\"col-auto\">
                                <a class=\"btn btn-primary btn-md\" href=\"";
            // line 16
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("VikaContentEdit", ["path" => "Sponsor"]);
            echo "\" role=\"button\">Editer</a>
                            </div>
                            <div class=\"col-auto\">
                                <a class=\"btn btn-primary btn-md\" href=\"";
            // line 19
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("sponsors_create");
            echo "\" role=\"button\">Ajouter un sponsor</a>
                            </div>
                        </div>
                        ";
        }
        // line 23
        echo "                        </div><!-- /.card-body -->
                        <div class=\"card-footer\">
                            <div class=\"card-footer-content\">
                                    <div class=\"row justify-content-md-center\">
                                            ";
        // line 27
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["sponsors"]) || array_key_exists("sponsors", $context) ? $context["sponsors"] : (function () { throw new Twig_Error_Runtime('Variable "sponsors" does not exist.', 27, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["sponsor"]) {
            // line 28
            echo "                                            <div class=\"col-4\">
                                                <div class=\"card\">
                                                    <div class=\"card-body\">
                                                    <h5 class=\"card-title\">";
            // line 31
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["sponsor"], "name", []), "html", null, true);
            echo "</h5>
                                                    </div>
                                                    <div class=\"text-center\">
                                                        <img class=\"embed-responsive-item\" src=\"upload/media/";
            // line 34
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["sponsor"], "logo", []), "html", null, true);
            echo "\" alt=\"Card image\" style=width:50%>
                                                    </div>
                                                    <div class=\"card-body\">
                                                        <p class=\"card-text\">";
            // line 37
            echo twig_get_attribute($this->env, $this->source, $context["sponsor"], "description", []);
            echo "</p>
                                                    </div>
                                                        ";
            // line 39
            if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN")) {
                // line 40
                echo "                                                        <div class=\"card-footer\">
                                                                <div class=\"row justify-content-start\">
                                                                        <div class=\"col-4\">
                                                                            <div class=\"card-footer-content text-muted\"> 
                                                                                <a class=\"btn btn-primary btn-md\" href=\"";
                // line 44
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("sponsors_edit", ["id" => twig_get_attribute($this->env, $this->source, $context["sponsor"], "id", [])]), "html", null, true);
                echo "\" role=\"button\">Editer</a>
                                                                            </div>
                                                                        </div>
                                                                        <div class=\"col-4\">
                                                                            <div class=\"card-footer-content text-muted\"> 
                                                                                <a class=\"btn btn-primary btn-md\" href=\"";
                // line 49
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("sponsors_delete", ["id" => twig_get_attribute($this->env, $this->source, $context["sponsor"], "id", [])]), "html", null, true);
                echo "\" role=\"button\">Supprimer</a>
                                                                            </div>
                                                                        </div>
                                                                </div>
                                                        </div>
                                                        ";
            } else {
                // line 55
                echo "                                                        ";
            }
            // line 56
            echo "                                                    
                                                </div>
                                            </div>
                                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['sponsor'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 60
        echo "                                        </div>
                            </div>
                        </div>
                    </div>
            </div>
        </div>
    




    

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "vika/Sponsorindex.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  157 => 60,  148 => 56,  145 => 55,  136 => 49,  128 => 44,  122 => 40,  120 => 39,  115 => 37,  109 => 34,  103 => 31,  98 => 28,  94 => 27,  88 => 23,  81 => 19,  75 => 16,  71 => 14,  69 => 13,  64 => 11,  53 => 4,  44 => 3,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"base.html.twig\" %}

{% block Body %}
<h2>{{ contentPage.title }}</h2>

        <div class=\"row justify-content-md-center\">
            <div class=\"col-12\">
                    <div class=\"card\">
                        <div class=\"card-body\">
                        <p class=\"card-text\"> 
                                {{ contentPage.content | raw }}                            
                        </p>
                        {% if (is_granted('ROLE_ADMIN'))%}
                        <div class=\"row\">
                            <div class=\"col-auto\">
                                <a class=\"btn btn-primary btn-md\" href=\"{{ path('VikaContentEdit', {'path':'Sponsor'}) }}\" role=\"button\">Editer</a>
                            </div>
                            <div class=\"col-auto\">
                                <a class=\"btn btn-primary btn-md\" href=\"{{ path('sponsors_create') }}\" role=\"button\">Ajouter un sponsor</a>
                            </div>
                        </div>
                        {% endif %}
                        </div><!-- /.card-body -->
                        <div class=\"card-footer\">
                            <div class=\"card-footer-content\">
                                    <div class=\"row justify-content-md-center\">
                                            {% for sponsor in sponsors %}
                                            <div class=\"col-4\">
                                                <div class=\"card\">
                                                    <div class=\"card-body\">
                                                    <h5 class=\"card-title\">{{ sponsor.name }}</h5>
                                                    </div>
                                                    <div class=\"text-center\">
                                                        <img class=\"embed-responsive-item\" src=\"upload/media/{{ sponsor.logo }}\" alt=\"Card image\" style=width:50%>
                                                    </div>
                                                    <div class=\"card-body\">
                                                        <p class=\"card-text\">{{ sponsor.description|raw }}</p>
                                                    </div>
                                                        {% if (is_granted('ROLE_ADMIN'))%}
                                                        <div class=\"card-footer\">
                                                                <div class=\"row justify-content-start\">
                                                                        <div class=\"col-4\">
                                                                            <div class=\"card-footer-content text-muted\"> 
                                                                                <a class=\"btn btn-primary btn-md\" href=\"{{ path('sponsors_edit', {'id':sponsor.id}) }}\" role=\"button\">Editer</a>
                                                                            </div>
                                                                        </div>
                                                                        <div class=\"col-4\">
                                                                            <div class=\"card-footer-content text-muted\"> 
                                                                                <a class=\"btn btn-primary btn-md\" href=\"{{ path('sponsors_delete', {'id':sponsor.id}) }}\" role=\"button\">Supprimer</a>
                                                                            </div>
                                                                        </div>
                                                                </div>
                                                        </div>
                                                        {% else %}
                                                        {% endif %}
                                                    
                                                </div>
                                            </div>
                                            {% endfor %}
                                        </div>
                            </div>
                        </div>
                    </div>
            </div>
        </div>
    




    

{% endblock %}", "vika/Sponsorindex.html.twig", "C:\\wamp64\\www\\KarateClub\\templates\\vika\\Sponsorindex.html.twig");
    }
}
