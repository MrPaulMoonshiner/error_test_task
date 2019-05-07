<?php

use Symfony\Component\Routing\RequestContext;
use Symfony\Component\Routing\Exception\RouteNotFoundException;
use Psr\Log\LoggerInterface;

/**
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class srcApp_KernelDevDebugContainerUrlGenerator extends Symfony\Component\Routing\Generator\UrlGenerator
{
    private static $declaredRoutes;
    private $defaultLocale;

    public function __construct(RequestContext $context, LoggerInterface $logger = null, string $defaultLocale = null)
    {
        $this->context = $context;
        $this->logger = $logger;
        $this->defaultLocale = $defaultLocale;
        if (null === self::$declaredRoutes) {
            self::$declaredRoutes = [
        '_twig_error_test' => [['code', '_format'], ['_controller' => 'twig.controller.preview_error::previewErrorPageAction', '_format' => 'html'], ['code' => '\\d+'], [['variable', '.', '[^/]++', '_format', true], ['variable', '/', '\\d+', 'code', true], ['text', '/_error']], [], []],
        '_wdt' => [['token'], ['_controller' => 'web_profiler.controller.profiler::toolbarAction'], [], [['variable', '/', '[^/]++', 'token', true], ['text', '/_wdt']], [], []],
        '_profiler_home' => [[], ['_controller' => 'web_profiler.controller.profiler::homeAction'], [], [['text', '/_profiler/']], [], []],
        '_profiler_search' => [[], ['_controller' => 'web_profiler.controller.profiler::searchAction'], [], [['text', '/_profiler/search']], [], []],
        '_profiler_search_bar' => [[], ['_controller' => 'web_profiler.controller.profiler::searchBarAction'], [], [['text', '/_profiler/search_bar']], [], []],
        '_profiler_phpinfo' => [[], ['_controller' => 'web_profiler.controller.profiler::phpinfoAction'], [], [['text', '/_profiler/phpinfo']], [], []],
        '_profiler_search_results' => [['token'], ['_controller' => 'web_profiler.controller.profiler::searchResultsAction'], [], [['text', '/search/results'], ['variable', '/', '[^/]++', 'token', true], ['text', '/_profiler']], [], []],
        '_profiler_open_file' => [[], ['_controller' => 'web_profiler.controller.profiler::openAction'], [], [['text', '/_profiler/open']], [], []],
        '_profiler' => [['token'], ['_controller' => 'web_profiler.controller.profiler::panelAction'], [], [['variable', '/', '[^/]++', 'token', true], ['text', '/_profiler']], [], []],
        '_profiler_router' => [['token'], ['_controller' => 'web_profiler.controller.router::panelAction'], [], [['text', '/router'], ['variable', '/', '[^/]++', 'token', true], ['text', '/_profiler']], [], []],
        '_profiler_exception' => [['token'], ['_controller' => 'web_profiler.controller.exception::showAction'], [], [['text', '/exception'], ['variable', '/', '[^/]++', 'token', true], ['text', '/_profiler']], [], []],
        '_profiler_exception_css' => [['token'], ['_controller' => 'web_profiler.controller.exception::cssAction'], [], [['text', '/exception.css'], ['variable', '/', '[^/]++', 'token', true], ['text', '/_profiler']], [], []],
        'app_homepage' => [[], ['_controller' => 'App\\Controller\\ArticleController::homepage'], [], [['text', '/']], [], []],
        'app_yop' => [[], ['_controller' => 'App\\Controller\\ArticleController::show'], [], [['text', '/news/']], [], []],
        '/lang' => [[], ['_controller' => 'App\\Controller\\ArticleController::changeLocale'], [], [['text', '/lang']], [], []],
        'user_registration' => [[], ['_controller' => 'App\\Controller\\RegistrationController::registerAction'], [], [['text', '/register']], [], []],
        'app_login' => [[], ['_controller' => 'App\\Controller\\SecurityController::login'], [], [['text', '/login']], [], []],
        'app_logout' => [[], ['_controller' => 'App\\Controller\\SecurityController::logout'], [], [['text', '/logout']], [], []],
        'user_review' => [[], ['_controller' => 'App\\Controller\\UserReviewController::newReview'], [], [['text', '/user/review']], [], []],
        'sonata_admin_redirect' => [[], ['_controller' => 'Symfony\\Bundle\\FrameworkBundle\\Controller\\RedirectController::redirectAction', 'route' => 'sonata_admin_dashboard', 'permanent' => 'true'], [], [['text', '/admin/']], [], []],
        'sonata_admin_dashboard' => [[], ['_controller' => 'Sonata\\AdminBundle\\Action\\DashboardAction'], [], [['text', '/admin/dashboard']], [], []],
        'sonata_admin_retrieve_form_element' => [[], ['_controller' => 'sonata.admin.action.retrieve_form_field_element'], [], [['text', '/admin/core/get-form-field-element']], [], []],
        'sonata_admin_append_form_element' => [[], ['_controller' => 'sonata.admin.action.append_form_field_element'], [], [['text', '/admin/core/append-form-field-element']], [], []],
        'sonata_admin_short_object_information' => [['_format'], ['_controller' => 'sonata.admin.action.get_short_object_description', '_format' => 'html'], ['_format' => 'html|json'], [['variable', '.', 'html|json', '_format', true], ['text', '/admin/core/get-short-object-description']], [], []],
        'sonata_admin_set_object_field_value' => [[], ['_controller' => 'sonata.admin.action.set_object_field_value'], [], [['text', '/admin/core/set-object-field-value']], [], []],
        'sonata_admin_search' => [[], ['_controller' => 'Sonata\\AdminBundle\\Action\\SearchAction'], [], [['text', '/admin/search']], [], []],
        'sonata_admin_retrieve_autocomplete_items' => [[], ['_controller' => 'sonata.admin.action.retrieve_autocomplete_items'], [], [['text', '/admin/core/get-autocomplete-items']], [], []],
        'user_admin_list' => [[], ['_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::listAction', '_sonata_admin' => 'admin.user', '_sonata_name' => 'user_admin_list'], [], [['text', '/admin/user/list']], [], []],
        'user_admin_create' => [[], ['_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::createAction', '_sonata_admin' => 'admin.user', '_sonata_name' => 'user_admin_create'], [], [['text', '/admin/user/create']], [], []],
        'user_admin_batch' => [[], ['_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::batchAction', '_sonata_admin' => 'admin.user', '_sonata_name' => 'user_admin_batch'], [], [['text', '/admin/user/batch']], [], []],
        'user_admin_edit' => [['id'], ['_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::editAction', '_sonata_admin' => 'admin.user', '_sonata_name' => 'user_admin_edit'], [], [['text', '/edit'], ['variable', '/', '[^/]++', 'id', true], ['text', '/admin/user']], [], []],
        'user_admin_delete' => [['id'], ['_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::deleteAction', '_sonata_admin' => 'admin.user', '_sonata_name' => 'user_admin_delete'], [], [['text', '/delete'], ['variable', '/', '[^/]++', 'id', true], ['text', '/admin/user']], [], []],
        'user_admin_show' => [['id'], ['_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::showAction', '_sonata_admin' => 'admin.user', '_sonata_name' => 'user_admin_show'], [], [['text', '/show'], ['variable', '/', '[^/]++', 'id', true], ['text', '/admin/user']], [], []],
        'user_admin_export' => [[], ['_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::exportAction', '_sonata_admin' => 'admin.user', '_sonata_name' => 'user_admin_export'], [], [['text', '/admin/user/export']], [], []],
        'user_reviews_list' => [[], ['_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::listAction', '_sonata_admin' => 'admin.review', '_sonata_name' => 'user_reviews_list'], [], [['text', '/admin/reviews/list']], [], []],
        'user_reviews_create' => [[], ['_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::createAction', '_sonata_admin' => 'admin.review', '_sonata_name' => 'user_reviews_create'], [], [['text', '/admin/reviews/create']], [], []],
        'user_reviews_batch' => [[], ['_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::batchAction', '_sonata_admin' => 'admin.review', '_sonata_name' => 'user_reviews_batch'], [], [['text', '/admin/reviews/batch']], [], []],
        'user_reviews_edit' => [['id'], ['_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::editAction', '_sonata_admin' => 'admin.review', '_sonata_name' => 'user_reviews_edit'], [], [['text', '/edit'], ['variable', '/', '[^/]++', 'id', true], ['text', '/admin/reviews']], [], []],
        'user_reviews_delete' => [['id'], ['_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::deleteAction', '_sonata_admin' => 'admin.review', '_sonata_name' => 'user_reviews_delete'], [], [['text', '/delete'], ['variable', '/', '[^/]++', 'id', true], ['text', '/admin/reviews']], [], []],
        'user_reviews_show' => [['id'], ['_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::showAction', '_sonata_admin' => 'admin.review', '_sonata_name' => 'user_reviews_show'], [], [['text', '/show'], ['variable', '/', '[^/]++', 'id', true], ['text', '/admin/reviews']], [], []],
        'user_reviews_export' => [[], ['_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::exportAction', '_sonata_admin' => 'admin.review', '_sonata_name' => 'user_reviews_export'], [], [['text', '/admin/reviews/export']], [], []],
        'article' => [['_locale'], ['_controller' => 'App\\Controller\\ArticleController::changeLocale'], ['_locale' => 'en|fr|de'], [['text', '/'], ['variable', '/', 'en|fr|de', '_locale', true]], [], []],
    ];
        }
    }

    public function generate($name, $parameters = [], $referenceType = self::ABSOLUTE_PATH)
    {
        $locale = $parameters['_locale']
            ?? $this->context->getParameter('_locale')
            ?: $this->defaultLocale;

        if (null !== $locale && null !== $name) {
            do {
                if ((self::$declaredRoutes[$name.'.'.$locale][1]['_canonical_route'] ?? null) === $name) {
                    unset($parameters['_locale']);
                    $name .= '.'.$locale;
                    break;
                }
            } while (false !== $locale = strstr($locale, '_', true));
        }

        if (!isset(self::$declaredRoutes[$name])) {
            throw new RouteNotFoundException(sprintf('Unable to generate a URL for the named route "%s" as such route does not exist.', $name));
        }

        list($variables, $defaults, $requirements, $tokens, $hostTokens, $requiredSchemes) = self::$declaredRoutes[$name];

        return $this->doGenerate($variables, $defaults, $requirements, $tokens, $parameters, $name, $referenceType, $hostTokens, $requiredSchemes);
    }
}
