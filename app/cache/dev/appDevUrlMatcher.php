<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * appDevUrlMatcher.
 *
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appDevUrlMatcher extends Symfony\Bundle\FrameworkBundle\Routing\RedirectableUrlMatcher
{
    /**
     * Constructor.
     */
    public function __construct(RequestContext $context)
    {
        $this->context = $context;
    }

    public function match($pathinfo)
    {
        $allow = array();
        $pathinfo = rawurldecode($pathinfo);
        $context = $this->context;
        $request = $this->request;

        if (0 === strpos($pathinfo, '/_')) {
            // _wdt
            if (0 === strpos($pathinfo, '/_wdt') && preg_match('#^/_wdt/(?P<token>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => '_wdt')), array (  '_controller' => 'web_profiler.controller.profiler:toolbarAction',));
            }

            if (0 === strpos($pathinfo, '/_profiler')) {
                // _profiler_home
                if (rtrim($pathinfo, '/') === '/_profiler') {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', '_profiler_home');
                    }

                    return array (  '_controller' => 'web_profiler.controller.profiler:homeAction',  '_route' => '_profiler_home',);
                }

                if (0 === strpos($pathinfo, '/_profiler/search')) {
                    // _profiler_search
                    if ($pathinfo === '/_profiler/search') {
                        return array (  '_controller' => 'web_profiler.controller.profiler:searchAction',  '_route' => '_profiler_search',);
                    }

                    // _profiler_search_bar
                    if ($pathinfo === '/_profiler/search_bar') {
                        return array (  '_controller' => 'web_profiler.controller.profiler:searchBarAction',  '_route' => '_profiler_search_bar',);
                    }

                }

                // _profiler_purge
                if ($pathinfo === '/_profiler/purge') {
                    return array (  '_controller' => 'web_profiler.controller.profiler:purgeAction',  '_route' => '_profiler_purge',);
                }

                // _profiler_info
                if (0 === strpos($pathinfo, '/_profiler/info') && preg_match('#^/_profiler/info/(?P<about>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_info')), array (  '_controller' => 'web_profiler.controller.profiler:infoAction',));
                }

                // _profiler_phpinfo
                if ($pathinfo === '/_profiler/phpinfo') {
                    return array (  '_controller' => 'web_profiler.controller.profiler:phpinfoAction',  '_route' => '_profiler_phpinfo',);
                }

                // _profiler_search_results
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/search/results$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_search_results')), array (  '_controller' => 'web_profiler.controller.profiler:searchResultsAction',));
                }

                // _profiler
                if (preg_match('#^/_profiler/(?P<token>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler')), array (  '_controller' => 'web_profiler.controller.profiler:panelAction',));
                }

                // _profiler_router
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/router$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_router')), array (  '_controller' => 'web_profiler.controller.router:panelAction',));
                }

                // _profiler_exception
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/exception$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_exception')), array (  '_controller' => 'web_profiler.controller.exception:showAction',));
                }

                // _profiler_exception_css
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/exception\\.css$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_exception_css')), array (  '_controller' => 'web_profiler.controller.exception:cssAction',));
                }

            }

            if (0 === strpos($pathinfo, '/_configurator')) {
                // _configurator_home
                if (rtrim($pathinfo, '/') === '/_configurator') {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', '_configurator_home');
                    }

                    return array (  '_controller' => 'Sensio\\Bundle\\DistributionBundle\\Controller\\ConfiguratorController::checkAction',  '_route' => '_configurator_home',);
                }

                // _configurator_step
                if (0 === strpos($pathinfo, '/_configurator/step') && preg_match('#^/_configurator/step/(?P<index>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_configurator_step')), array (  '_controller' => 'Sensio\\Bundle\\DistributionBundle\\Controller\\ConfiguratorController::stepAction',));
                }

                // _configurator_final
                if ($pathinfo === '/_configurator/final') {
                    return array (  '_controller' => 'Sensio\\Bundle\\DistributionBundle\\Controller\\ConfiguratorController::finalAction',  '_route' => '_configurator_final',);
                }

            }

            // _twig_error_test
            if (0 === strpos($pathinfo, '/_error') && preg_match('#^/_error/(?P<code>\\d+)(?:\\.(?P<_format>[^/]++))?$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => '_twig_error_test')), array (  '_controller' => 'twig.controller.preview_error:previewErrorPageAction',  '_format' => 'html',));
            }

        }

        if (0 === strpos($pathinfo, '/admin/account')) {
            // account
            if (rtrim($pathinfo, '/') === '/admin/account') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'account');
                }

                return array (  '_controller' => 'Members\\MembersBundle\\Controller\\AccountMemberController::indexAction',  '_route' => 'account',);
            }

            // account_show
            if (preg_match('#^/admin/account/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'account_show')), array (  '_controller' => 'Members\\MembersBundle\\Controller\\AccountMemberController::showAction',));
            }

            // account_new
            if ($pathinfo === '/admin/account/new') {
                return array (  '_controller' => 'Members\\MembersBundle\\Controller\\AccountMemberController::newAction',  '_route' => 'account_new',);
            }

            // account_create
            if ($pathinfo === '/admin/account/create') {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_account_create;
                }

                return array (  '_controller' => 'Members\\MembersBundle\\Controller\\AccountMemberController::createAction',  '_route' => 'account_create',);
            }
            not_account_create:

            // account_edit
            if (preg_match('#^/admin/account/(?P<id>[^/]++)/(?P<status>[^/]++)/edit$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'account_edit')), array (  '_controller' => 'Members\\MembersBundle\\Controller\\AccountMemberController::editAction',));
            }

            // account_update
            if (preg_match('#^/admin/account/(?P<id>[^/]++)/(?P<status>[^/]++)/update$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('POST', 'PUT'))) {
                    $allow = array_merge($allow, array('POST', 'PUT'));
                    goto not_account_update;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'account_update')), array (  '_controller' => 'Members\\MembersBundle\\Controller\\AccountMemberController::updateAction',));
            }
            not_account_update:

            // account_delete
            if (preg_match('#^/admin/account/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('POST', 'DELETE'))) {
                    $allow = array_merge($allow, array('POST', 'DELETE'));
                    goto not_account_delete;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'account_delete')), array (  '_controller' => 'Members\\MembersBundle\\Controller\\AccountMemberController::deleteAction',));
            }
            not_account_delete:

        }

        if (0 === strpos($pathinfo, '/log')) {
            if (0 === strpos($pathinfo, '/login')) {
                // fos_user_security_login
                if ($pathinfo === '/login') {
                    if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                        goto not_fos_user_security_login;
                    }

                    return array (  '_controller' => 'FOS\\UserBundle\\Controller\\SecurityController::loginAction',  '_route' => 'fos_user_security_login',);
                }
                not_fos_user_security_login:

                // fos_user_security_check
                if ($pathinfo === '/login_check') {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_fos_user_security_check;
                    }

                    return array (  '_controller' => 'FOS\\UserBundle\\Controller\\SecurityController::checkAction',  '_route' => 'fos_user_security_check',);
                }
                not_fos_user_security_check:

            }

            // fos_user_security_logout
            if ($pathinfo === '/logout') {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_fos_user_security_logout;
                }

                return array (  '_controller' => 'FOS\\UserBundle\\Controller\\SecurityController::logoutAction',  '_route' => 'fos_user_security_logout',);
            }
            not_fos_user_security_logout:

        }

        if (0 === strpos($pathinfo, '/profile')) {
            // fos_user_profile_show
            if (rtrim($pathinfo, '/') === '/profile') {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_fos_user_profile_show;
                }

                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'fos_user_profile_show');
                }

                return array (  '_controller' => 'FOS\\UserBundle\\Controller\\ProfileController::showAction',  '_route' => 'fos_user_profile_show',);
            }
            not_fos_user_profile_show:

            // fos_user_profile_edit
            if ($pathinfo === '/profile/edit') {
                if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                    goto not_fos_user_profile_edit;
                }

                return array (  '_controller' => 'FOS\\UserBundle\\Controller\\ProfileController::editAction',  '_route' => 'fos_user_profile_edit',);
            }
            not_fos_user_profile_edit:

        }

        if (0 === strpos($pathinfo, '/re')) {
            if (0 === strpos($pathinfo, '/register')) {
                // fos_user_registration_register
                if (rtrim($pathinfo, '/') === '/register') {
                    if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                        goto not_fos_user_registration_register;
                    }

                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'fos_user_registration_register');
                    }

                    return array (  '_controller' => 'FOS\\UserBundle\\Controller\\RegistrationController::registerAction',  '_route' => 'fos_user_registration_register',);
                }
                not_fos_user_registration_register:

                if (0 === strpos($pathinfo, '/register/c')) {
                    // fos_user_registration_check_email
                    if ($pathinfo === '/register/check-email') {
                        if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                            $allow = array_merge($allow, array('GET', 'HEAD'));
                            goto not_fos_user_registration_check_email;
                        }

                        return array (  '_controller' => 'FOS\\UserBundle\\Controller\\RegistrationController::checkEmailAction',  '_route' => 'fos_user_registration_check_email',);
                    }
                    not_fos_user_registration_check_email:

                    if (0 === strpos($pathinfo, '/register/confirm')) {
                        // fos_user_registration_confirm
                        if (preg_match('#^/register/confirm/(?P<token>[^/]++)$#s', $pathinfo, $matches)) {
                            if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                                $allow = array_merge($allow, array('GET', 'HEAD'));
                                goto not_fos_user_registration_confirm;
                            }

                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'fos_user_registration_confirm')), array (  '_controller' => 'FOS\\UserBundle\\Controller\\RegistrationController::confirmAction',));
                        }
                        not_fos_user_registration_confirm:

                        // fos_user_registration_confirmed
                        if ($pathinfo === '/register/confirmed') {
                            if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                                $allow = array_merge($allow, array('GET', 'HEAD'));
                                goto not_fos_user_registration_confirmed;
                            }

                            return array (  '_controller' => 'FOS\\UserBundle\\Controller\\RegistrationController::confirmedAction',  '_route' => 'fos_user_registration_confirmed',);
                        }
                        not_fos_user_registration_confirmed:

                    }

                }

            }

            if (0 === strpos($pathinfo, '/resetting')) {
                // fos_user_resetting_request
                if ($pathinfo === '/resetting/request') {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_fos_user_resetting_request;
                    }

                    return array (  '_controller' => 'FOS\\UserBundle\\Controller\\ResettingController::requestAction',  '_route' => 'fos_user_resetting_request',);
                }
                not_fos_user_resetting_request:

                // fos_user_resetting_send_email
                if ($pathinfo === '/resetting/send-email') {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_fos_user_resetting_send_email;
                    }

                    return array (  '_controller' => 'FOS\\UserBundle\\Controller\\ResettingController::sendEmailAction',  '_route' => 'fos_user_resetting_send_email',);
                }
                not_fos_user_resetting_send_email:

                // fos_user_resetting_check_email
                if ($pathinfo === '/resetting/check-email') {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_fos_user_resetting_check_email;
                    }

                    return array (  '_controller' => 'FOS\\UserBundle\\Controller\\ResettingController::checkEmailAction',  '_route' => 'fos_user_resetting_check_email',);
                }
                not_fos_user_resetting_check_email:

                // fos_user_resetting_reset
                if (0 === strpos($pathinfo, '/resetting/reset') && preg_match('#^/resetting/reset/(?P<token>[^/]++)$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                        goto not_fos_user_resetting_reset;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'fos_user_resetting_reset')), array (  '_controller' => 'FOS\\UserBundle\\Controller\\ResettingController::resetAction',));
                }
                not_fos_user_resetting_reset:

            }

        }

        // fos_user_change_password
        if ($pathinfo === '/profile/change-password') {
            if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                goto not_fos_user_change_password;
            }

            return array (  '_controller' => 'FOS\\UserBundle\\Controller\\ChangePasswordController::changePasswordAction',  '_route' => 'fos_user_change_password',);
        }
        not_fos_user_change_password:

        if (0 === strpos($pathinfo, '/group')) {
            // fos_user_group_list
            if ($pathinfo === '/group/list') {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_fos_user_group_list;
                }

                return array (  '_controller' => 'FOS\\UserBundle\\Controller\\GroupController::listAction',  '_route' => 'fos_user_group_list',);
            }
            not_fos_user_group_list:

            // fos_user_group_new
            if ($pathinfo === '/group/new') {
                if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                    goto not_fos_user_group_new;
                }

                return array (  '_controller' => 'FOS\\UserBundle\\Controller\\GroupController::newAction',  '_route' => 'fos_user_group_new',);
            }
            not_fos_user_group_new:

            // fos_user_group_show
            if (preg_match('#^/group/(?P<groupName>[^/]++)$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_fos_user_group_show;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'fos_user_group_show')), array (  '_controller' => 'FOS\\UserBundle\\Controller\\GroupController::showAction',));
            }
            not_fos_user_group_show:

            // fos_user_group_edit
            if (preg_match('#^/group/(?P<groupName>[^/]++)/edit$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                    goto not_fos_user_group_edit;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'fos_user_group_edit')), array (  '_controller' => 'FOS\\UserBundle\\Controller\\GroupController::editAction',));
            }
            not_fos_user_group_edit:

            // fos_user_group_delete
            if (preg_match('#^/group/(?P<groupName>[^/]++)/delete$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_fos_user_group_delete;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'fos_user_group_delete')), array (  '_controller' => 'FOS\\UserBundle\\Controller\\GroupController::deleteAction',));
            }
            not_fos_user_group_delete:

        }

        if (0 === strpos($pathinfo, '/operation')) {
            // operation
            if (rtrim($pathinfo, '/') === '/operation') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'operation');
                }

                return array (  '_controller' => 'Ventes\\VentesBundle\\Controller\\OperationController::indexAction',  '_route' => 'operation',);
            }

            // operation_journal_caisse
            if ($pathinfo === '/operation/journal') {
                return array (  '_controller' => 'Ventes\\VentesBundle\\Controller\\OperationController::journalAction',  '_route' => 'operation_journal_caisse',);
            }

            // operation_bon_caisse
            if (preg_match('#^/operation/(?P<idop>[^/]++)/bon/op$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'operation_bon_caisse')), array (  '_controller' => 'Ventes\\VentesBundle\\Controller\\OperationController::bonAction',));
            }

            // operation_journal_print
            if ($pathinfo === '/operation/journal/print') {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_operation_journal_print;
                }

                return array (  '_controller' => 'Ventes\\VentesBundle\\Controller\\OperationController::journalEtatAction',  '_route' => 'operation_journal_print',);
            }
            not_operation_journal_print:

            // operation_show
            if (preg_match('#^/operation/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'operation_show')), array (  '_controller' => 'Ventes\\VentesBundle\\Controller\\OperationController::showAction',));
            }

            // operation_new
            if ($pathinfo === '/operation/new') {
                return array (  '_controller' => 'Ventes\\VentesBundle\\Controller\\OperationController::newAction',  '_route' => 'operation_new',);
            }

            // operation_create
            if ($pathinfo === '/operation/create') {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_operation_create;
                }

                return array (  '_controller' => 'Ventes\\VentesBundle\\Controller\\OperationController::createAction',  '_route' => 'operation_create',);
            }
            not_operation_create:

            // operation_edit
            if (preg_match('#^/operation/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'operation_edit')), array (  '_controller' => 'Ventes\\VentesBundle\\Controller\\OperationController::editAction',));
            }

            // operation_update
            if (preg_match('#^/operation/(?P<id>[^/]++)/update$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('POST', 'PUT'))) {
                    $allow = array_merge($allow, array('POST', 'PUT'));
                    goto not_operation_update;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'operation_update')), array (  '_controller' => 'Ventes\\VentesBundle\\Controller\\OperationController::updateAction',));
            }
            not_operation_update:

            // operation_delete
            if (preg_match('#^/operation/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('POST', 'DELETE'))) {
                    $allow = array_merge($allow, array('POST', 'DELETE'));
                    goto not_operation_delete;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'operation_delete')), array (  '_controller' => 'Ventes\\VentesBundle\\Controller\\OperationController::deleteAction',));
            }
            not_operation_delete:

        }

        if (0 === strpos($pathinfo, '/apporteur')) {
            // apporteur
            if (rtrim($pathinfo, '/') === '/apporteur') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'apporteur');
                }

                return array (  '_controller' => 'Ventes\\VentesBundle\\Controller\\ApporteurController::indexAction',  '_route' => 'apporteur',);
            }

            // apporteur_show
            if (preg_match('#^/apporteur/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'apporteur_show')), array (  '_controller' => 'Ventes\\VentesBundle\\Controller\\ApporteurController::showAction',));
            }

            // apporteur_etat
            if (preg_match('#^/apporteur/(?P<idap>[^/]++)/etat/apporteur$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'apporteur_etat')), array (  '_controller' => 'Ventes\\VentesBundle\\Controller\\ApporteurController::caApporteurAction',));
            }

            // apporteur_new
            if ($pathinfo === '/apporteur/new') {
                return array (  '_controller' => 'Ventes\\VentesBundle\\Controller\\ApporteurController::newAction',  '_route' => 'apporteur_new',);
            }

            // apporteur_create
            if ($pathinfo === '/apporteur/create') {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_apporteur_create;
                }

                return array (  '_controller' => 'Ventes\\VentesBundle\\Controller\\ApporteurController::createAction',  '_route' => 'apporteur_create',);
            }
            not_apporteur_create:

            // apporteur_edit
            if (preg_match('#^/apporteur/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'apporteur_edit')), array (  '_controller' => 'Ventes\\VentesBundle\\Controller\\ApporteurController::editAction',));
            }

            // apporteur_update
            if (preg_match('#^/apporteur/(?P<id>[^/]++)/update$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('POST', 'PUT'))) {
                    $allow = array_merge($allow, array('POST', 'PUT'));
                    goto not_apporteur_update;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'apporteur_update')), array (  '_controller' => 'Ventes\\VentesBundle\\Controller\\ApporteurController::updateAction',));
            }
            not_apporteur_update:

            // apporteur_delete
            if (preg_match('#^/apporteur/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('POST', 'DELETE'))) {
                    $allow = array_merge($allow, array('POST', 'DELETE'));
                    goto not_apporteur_delete;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'apporteur_delete')), array (  '_controller' => 'Ventes\\VentesBundle\\Controller\\ApporteurController::deleteAction',));
            }
            not_apporteur_delete:

        }

        if (0 === strpos($pathinfo, '/detailsproduits')) {
            // detailsproduits
            if (rtrim($pathinfo, '/') === '/detailsproduits') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'detailsproduits');
                }

                return array (  '_controller' => 'Ventes\\VentesBundle\\Controller\\DetailsProduitsController::indexAction',  '_route' => 'detailsproduits',);
            }

            // detailsproduits_show
            if (preg_match('#^/detailsproduits/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'detailsproduits_show')), array (  '_controller' => 'Ventes\\VentesBundle\\Controller\\DetailsProduitsController::showAction',));
            }

            // detailsproduits_new
            if ($pathinfo === '/detailsproduits/new') {
                return array (  '_controller' => 'Ventes\\VentesBundle\\Controller\\DetailsProduitsController::newAction',  '_route' => 'detailsproduits_new',);
            }

            // detailsproduits_create
            if ($pathinfo === '/detailsproduits/create') {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_detailsproduits_create;
                }

                return array (  '_controller' => 'Ventes\\VentesBundle\\Controller\\DetailsProduitsController::createAction',  '_route' => 'detailsproduits_create',);
            }
            not_detailsproduits_create:

            // detailsproduits_edit
            if (preg_match('#^/detailsproduits/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'detailsproduits_edit')), array (  '_controller' => 'Ventes\\VentesBundle\\Controller\\DetailsProduitsController::editAction',));
            }

            // detailsproduits_update
            if (preg_match('#^/detailsproduits/(?P<id>[^/]++)/update$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('POST', 'PUT'))) {
                    $allow = array_merge($allow, array('POST', 'PUT'));
                    goto not_detailsproduits_update;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'detailsproduits_update')), array (  '_controller' => 'Ventes\\VentesBundle\\Controller\\DetailsProduitsController::updateAction',));
            }
            not_detailsproduits_update:

            // detailsproduits_delete
            if (preg_match('#^/detailsproduits/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('POST', 'DELETE'))) {
                    $allow = array_merge($allow, array('POST', 'DELETE'));
                    goto not_detailsproduits_delete;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'detailsproduits_delete')), array (  '_controller' => 'Ventes\\VentesBundle\\Controller\\DetailsProduitsController::deleteAction',));
            }
            not_detailsproduits_delete:

        }

        if (0 === strpos($pathinfo, '/factures')) {
            // facture
            if (preg_match('#^/factures/(?P<idcli>\\d+)/(?P<etat>[^/]++)/f$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'facture')), array (  '_controller' => 'Ventes\\VentesBundle\\Controller\\FactureController::indexAction',));
            }

            if (0 === strpos($pathinfo, '/factures/all')) {
                // proforma_all
                if ($pathinfo === '/factures/allproforma') {
                    return array (  '_controller' => 'Ventes\\VentesBundle\\Controller\\FactureController::allProformaAction',  '_route' => 'proforma_all',);
                }

                // facture_all
                if ($pathinfo === '/factures/allfacture') {
                    return array (  '_controller' => 'Ventes\\VentesBundle\\Controller\\FactureController::allFactureAction',  '_route' => 'facture_all',);
                }

            }

            // facture_validation_proforma
            if (preg_match('#^/factures/(?P<idproforma>[^/]++)/validation$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'facture_validation_proforma')), array (  '_controller' => 'Ventes\\VentesBundle\\Controller\\FactureController::validerAction',));
            }

            // facture_resilier
            if (preg_match('#^/factures/(?P<idfacture>[^/]++)/resiliation$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'facture_resilier')), array (  '_controller' => 'Ventes\\VentesBundle\\Controller\\FactureController::retirerAction',));
            }

            // facture_impression
            if (preg_match('#^/factures/(?P<idfacture>\\d+)/impression$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'facture_impression')), array (  '_controller' => 'Ventes\\VentesBundle\\Controller\\FactureController::impressionFactureAction',));
            }

            // facture_show
            if (preg_match('#^/factures/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'facture_show')), array (  '_controller' => 'Ventes\\VentesBundle\\Controller\\FactureController::showAction',));
            }

            // facture_new
            if (preg_match('#^/factures/(?P<idclient>\\d+)/(?P<etat>[^/]++)/new$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'facture_new')), array (  '_controller' => 'Ventes\\VentesBundle\\Controller\\FactureController::newAction',));
            }

            // fact_etat_compte
            if (preg_match('#^/factures/(?P<idcli>[^/]++)/compte/cpt$#s', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_fact_etat_compte;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'fact_etat_compte')), array (  '_controller' => 'Ventes\\VentesBundle\\Controller\\FactureController::compteEtatAction',));
            }
            not_fact_etat_compte:

            // facture_create
            if (preg_match('#^/factures/(?P<idclient>[^/]++)/(?P<etat>[^/]++)/create/c$#s', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_facture_create;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'facture_create')), array (  '_controller' => 'Ventes\\VentesBundle\\Controller\\FactureController::createAction',));
            }
            not_facture_create:

            // facture_edit
            if (preg_match('#^/factures/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'facture_edit')), array (  '_controller' => 'Ventes\\VentesBundle\\Controller\\FactureController::editAction',));
            }

            // facture_update
            if (preg_match('#^/factures/(?P<id>[^/]++)/update$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('POST', 'PUT'))) {
                    $allow = array_merge($allow, array('POST', 'PUT'));
                    goto not_facture_update;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'facture_update')), array (  '_controller' => 'Ventes\\VentesBundle\\Controller\\FactureController::updateAction',));
            }
            not_facture_update:

            // facture_delete
            if (preg_match('#^/factures/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('POST', 'DELETE'))) {
                    $allow = array_merge($allow, array('POST', 'DELETE'));
                    goto not_facture_delete;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'facture_delete')), array (  '_controller' => 'Ventes\\VentesBundle\\Controller\\FactureController::deleteAction',));
            }
            not_facture_delete:

        }

        if (0 === strpos($pathinfo, '/encaissement')) {
            // encaissement
            if (preg_match('#^/encaissement/(?P<idfacture>\\d+)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'encaissement')), array (  '_controller' => 'Ventes\\VentesBundle\\Controller\\EncaissementController::indexAction',));
            }

            // encaissement_all
            if ($pathinfo === '/encaissement/allEncaissement') {
                return array (  '_controller' => 'Ventes\\VentesBundle\\Controller\\EncaissementController::allEncaissementAction',  '_route' => 'encaissement_all',);
            }

            // encaissement_single_etat
            if (preg_match('#^/encaissement/(?P<idencaiss>[^/]++)/print/single$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'encaissement_single_etat')), array (  '_controller' => 'Ventes\\VentesBundle\\Controller\\EncaissementController::printSingleEncaissementAction',));
            }

            // encaissement_print
            if (preg_match('#^/encaissement/(?P<idfact>[^/]++)/print/all$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'encaissement_print')), array (  '_controller' => 'Ventes\\VentesBundle\\Controller\\EncaissementController::impressionEncaissementAction',));
            }

            // encaissement_show
            if (preg_match('#^/encaissement/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'encaissement_show')), array (  '_controller' => 'Ventes\\VentesBundle\\Controller\\EncaissementController::showAction',));
            }

            // encaissement_new
            if (preg_match('#^/encaissement/(?P<idfacture>[^/]++)/new$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'encaissement_new')), array (  '_controller' => 'Ventes\\VentesBundle\\Controller\\EncaissementController::newAction',));
            }

            // encaissement_create
            if (preg_match('#^/encaissement/(?P<idfacture>[^/]++)/create$#s', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_encaissement_create;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'encaissement_create')), array (  '_controller' => 'Ventes\\VentesBundle\\Controller\\EncaissementController::createAction',));
            }
            not_encaissement_create:

            // encaissement_edit
            if (preg_match('#^/encaissement/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'encaissement_edit')), array (  '_controller' => 'Ventes\\VentesBundle\\Controller\\EncaissementController::editAction',));
            }

            // encaissement_update
            if (preg_match('#^/encaissement/(?P<id>[^/]++)/update$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('POST', 'PUT'))) {
                    $allow = array_merge($allow, array('POST', 'PUT'));
                    goto not_encaissement_update;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'encaissement_update')), array (  '_controller' => 'Ventes\\VentesBundle\\Controller\\EncaissementController::updateAction',));
            }
            not_encaissement_update:

            // encaissement_delete
            if (preg_match('#^/encaissement/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('POST', 'DELETE'))) {
                    $allow = array_merge($allow, array('POST', 'DELETE'));
                    goto not_encaissement_delete;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'encaissement_delete')), array (  '_controller' => 'Ventes\\VentesBundle\\Controller\\EncaissementController::deleteAction',));
            }
            not_encaissement_delete:

        }

        if (0 === strpos($pathinfo, '/categorieproduit')) {
            // categorieproduit
            if (rtrim($pathinfo, '/') === '/categorieproduit') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'categorieproduit');
                }

                return array (  '_controller' => 'Ventes\\VentesBundle\\Controller\\CategorieProduitController::indexAction',  '_route' => 'categorieproduit',);
            }

            // categorieproduit_show
            if (preg_match('#^/categorieproduit/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'categorieproduit_show')), array (  '_controller' => 'Ventes\\VentesBundle\\Controller\\CategorieProduitController::showAction',));
            }

            // categorieproduit_new
            if ($pathinfo === '/categorieproduit/new') {
                return array (  '_controller' => 'Ventes\\VentesBundle\\Controller\\CategorieProduitController::newAction',  '_route' => 'categorieproduit_new',);
            }

            // categorieproduit_create
            if ($pathinfo === '/categorieproduit/create') {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_categorieproduit_create;
                }

                return array (  '_controller' => 'Ventes\\VentesBundle\\Controller\\CategorieProduitController::createAction',  '_route' => 'categorieproduit_create',);
            }
            not_categorieproduit_create:

            // categorieproduit_edit
            if (preg_match('#^/categorieproduit/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'categorieproduit_edit')), array (  '_controller' => 'Ventes\\VentesBundle\\Controller\\CategorieProduitController::editAction',));
            }

            // categorieproduit_update
            if (preg_match('#^/categorieproduit/(?P<id>[^/]++)/update$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('POST', 'PUT'))) {
                    $allow = array_merge($allow, array('POST', 'PUT'));
                    goto not_categorieproduit_update;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'categorieproduit_update')), array (  '_controller' => 'Ventes\\VentesBundle\\Controller\\CategorieProduitController::updateAction',));
            }
            not_categorieproduit_update:

            // categorieproduit_delete
            if (preg_match('#^/categorieproduit/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('POST', 'DELETE'))) {
                    $allow = array_merge($allow, array('POST', 'DELETE'));
                    goto not_categorieproduit_delete;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'categorieproduit_delete')), array (  '_controller' => 'Ventes\\VentesBundle\\Controller\\CategorieProduitController::deleteAction',));
            }
            not_categorieproduit_delete:

        }

        if (0 === strpos($pathinfo, '/produit')) {
            // produit
            if (preg_match('#^/produit/(?P<idcli>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'produit')), array (  '_controller' => 'Ventes\\VentesBundle\\Controller\\ProduitController::indexAction',));
            }

            // produit_show
            if (preg_match('#^/produit/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'produit_show')), array (  '_controller' => 'Ventes\\VentesBundle\\Controller\\ProduitController::showAction',));
            }

            // produit_new
            if ($pathinfo === '/produit/new') {
                return array (  '_controller' => 'Ventes\\VentesBundle\\Controller\\ProduitController::newAction',  '_route' => 'produit_new',);
            }

            // produit_create
            if (preg_match('#^/produit/(?P<idcli>[^/]++)/create$#s', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_produit_create;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'produit_create')), array (  '_controller' => 'Ventes\\VentesBundle\\Controller\\ProduitController::createAction',));
            }
            not_produit_create:

            // produit_edit
            if (preg_match('#^/produit/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'produit_edit')), array (  '_controller' => 'Ventes\\VentesBundle\\Controller\\ProduitController::editAction',));
            }

            // produit_update
            if (preg_match('#^/produit/(?P<id>[^/]++)/update$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('POST', 'PUT'))) {
                    $allow = array_merge($allow, array('POST', 'PUT'));
                    goto not_produit_update;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'produit_update')), array (  '_controller' => 'Ventes\\VentesBundle\\Controller\\ProduitController::updateAction',));
            }
            not_produit_update:

            // produit_delete
            if (preg_match('#^/produit/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('POST', 'DELETE'))) {
                    $allow = array_merge($allow, array('POST', 'DELETE'));
                    goto not_produit_delete;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'produit_delete')), array (  '_controller' => 'Ventes\\VentesBundle\\Controller\\ProduitController::deleteAction',));
            }
            not_produit_delete:

        }

        if (0 === strpos($pathinfo, '/c')) {
            if (0 === strpos($pathinfo, '/categorieclient')) {
                // categorieclient
                if (rtrim($pathinfo, '/') === '/categorieclient') {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'categorieclient');
                    }

                    return array (  '_controller' => 'Ventes\\VentesBundle\\Controller\\CategorieClientController::indexAction',  '_route' => 'categorieclient',);
                }

                // categorieclient_show
                if (preg_match('#^/categorieclient/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'categorieclient_show')), array (  '_controller' => 'Ventes\\VentesBundle\\Controller\\CategorieClientController::showAction',));
                }

                // categorieclient_new
                if ($pathinfo === '/categorieclient/new') {
                    return array (  '_controller' => 'Ventes\\VentesBundle\\Controller\\CategorieClientController::newAction',  '_route' => 'categorieclient_new',);
                }

                // categorieclient_create
                if ($pathinfo === '/categorieclient/create') {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_categorieclient_create;
                    }

                    return array (  '_controller' => 'Ventes\\VentesBundle\\Controller\\CategorieClientController::createAction',  '_route' => 'categorieclient_create',);
                }
                not_categorieclient_create:

                // categorieclient_edit
                if (preg_match('#^/categorieclient/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'categorieclient_edit')), array (  '_controller' => 'Ventes\\VentesBundle\\Controller\\CategorieClientController::editAction',));
                }

                // categorieclient_update
                if (preg_match('#^/categorieclient/(?P<id>[^/]++)/update$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('POST', 'PUT'))) {
                        $allow = array_merge($allow, array('POST', 'PUT'));
                        goto not_categorieclient_update;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'categorieclient_update')), array (  '_controller' => 'Ventes\\VentesBundle\\Controller\\CategorieClientController::updateAction',));
                }
                not_categorieclient_update:

                // categorieclient_delete
                if (preg_match('#^/categorieclient/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('POST', 'DELETE'))) {
                        $allow = array_merge($allow, array('POST', 'DELETE'));
                        goto not_categorieclient_delete;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'categorieclient_delete')), array (  '_controller' => 'Ventes\\VentesBundle\\Controller\\CategorieClientController::deleteAction',));
                }
                not_categorieclient_delete:

            }

            if (0 === strpos($pathinfo, '/client')) {
                // proforma
                if ($pathinfo === '/client/proforma') {
                    return array (  '_controller' => 'Ventes\\VentesBundle\\Controller\\ClientController::proformaAction',  '_route' => 'proforma',);
                }

                // client
                if (rtrim($pathinfo, '/') === '/client') {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'client');
                    }

                    return array (  '_controller' => 'Ventes\\VentesBundle\\Controller\\ClientController::indexAction',  '_route' => 'client',);
                }

                // client_show
                if (preg_match('#^/client/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'client_show')), array (  '_controller' => 'Ventes\\VentesBundle\\Controller\\ClientController::showAction',));
                }

                // client_new
                if ($pathinfo === '/client/new') {
                    return array (  '_controller' => 'Ventes\\VentesBundle\\Controller\\ClientController::newAction',  '_route' => 'client_new',);
                }

                // client_create
                if ($pathinfo === '/client/create') {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_client_create;
                    }

                    return array (  '_controller' => 'Ventes\\VentesBundle\\Controller\\ClientController::createAction',  '_route' => 'client_create',);
                }
                not_client_create:

                // client_edit
                if (preg_match('#^/client/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'client_edit')), array (  '_controller' => 'Ventes\\VentesBundle\\Controller\\ClientController::editAction',));
                }

                // client_update
                if (preg_match('#^/client/(?P<id>[^/]++)/update$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('POST', 'PUT'))) {
                        $allow = array_merge($allow, array('POST', 'PUT'));
                        goto not_client_update;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'client_update')), array (  '_controller' => 'Ventes\\VentesBundle\\Controller\\ClientController::updateAction',));
                }
                not_client_update:

                // client_delete
                if (preg_match('#^/client/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('POST', 'DELETE'))) {
                        $allow = array_merge($allow, array('POST', 'DELETE'));
                        goto not_client_delete;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'client_delete')), array (  '_controller' => 'Ventes\\VentesBundle\\Controller\\ClientController::deleteAction',));
                }
                not_client_delete:

            }

        }

        // ventes_homepage
        if (rtrim($pathinfo, '/') === '/home') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'ventes_homepage');
            }

            return array (  '_controller' => 'Ventes\\VentesBundle\\Controller\\HomeController::homeAction',  '_route' => 'ventes_homepage',);
        }

        // ventes_accueil
        if (rtrim($pathinfo, '/') === '') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'ventes_accueil');
            }

            return array (  '_controller' => 'Ventes\\VentesBundle\\Controller\\HomeController::accueilAction',  '_route' => 'ventes_accueil',);
        }

        // infos_produit
        if (0 === strpos($pathinfo, '/infosproduits') && preg_match('#^/infosproduits/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'infos_produit')), array (  '_controller' => 'Ventes\\VentesBundle\\Controller\\DetailsProduitsController::infosProdAction',));
        }

        if (0 === strpos($pathinfo, '/directeur')) {
            // directeur
            if (rtrim($pathinfo, '/') === '/directeur') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'directeur');
                }

                return array (  '_controller' => 'Gestion\\GestionBundle\\Controller\\DirecteurController::indexAction',  '_route' => 'directeur',);
            }

            // directeur_show
            if (preg_match('#^/directeur/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'directeur_show')), array (  '_controller' => 'Gestion\\GestionBundle\\Controller\\DirecteurController::showAction',));
            }

            // directeur_new
            if ($pathinfo === '/directeur/new') {
                return array (  '_controller' => 'Gestion\\GestionBundle\\Controller\\DirecteurController::newAction',  '_route' => 'directeur_new',);
            }

            // directeur_create
            if ($pathinfo === '/directeur/create') {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_directeur_create;
                }

                return array (  '_controller' => 'Gestion\\GestionBundle\\Controller\\DirecteurController::createAction',  '_route' => 'directeur_create',);
            }
            not_directeur_create:

            // directeur_edit
            if (preg_match('#^/directeur/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'directeur_edit')), array (  '_controller' => 'Gestion\\GestionBundle\\Controller\\DirecteurController::editAction',));
            }

            // directeur_update
            if (preg_match('#^/directeur/(?P<id>[^/]++)/update$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('POST', 'PUT'))) {
                    $allow = array_merge($allow, array('POST', 'PUT'));
                    goto not_directeur_update;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'directeur_update')), array (  '_controller' => 'Gestion\\GestionBundle\\Controller\\DirecteurController::updateAction',));
            }
            not_directeur_update:

            // directeur_delete
            if (preg_match('#^/directeur/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('POST', 'DELETE'))) {
                    $allow = array_merge($allow, array('POST', 'DELETE'));
                    goto not_directeur_delete;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'directeur_delete')), array (  '_controller' => 'Gestion\\GestionBundle\\Controller\\DirecteurController::deleteAction',));
            }
            not_directeur_delete:

        }

        if (0 === strpos($pathinfo, '/cvupload')) {
            // cvupload
            if (preg_match('#^/cvupload/(?P<idemp>\\d+)/?$#s', $pathinfo, $matches)) {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'cvupload');
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'cvupload')), array (  '_controller' => 'Gestion\\GestionBundle\\Controller\\CvuploadController::indexAction',));
            }

            // cvupload_show
            if (preg_match('#^/cvupload/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'cvupload_show')), array (  '_controller' => 'Gestion\\GestionBundle\\Controller\\CvuploadController::showAction',));
            }

            // cvupload_new
            if (preg_match('#^/cvupload/(?P<idemp>\\d+)/new$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'cvupload_new')), array (  '_controller' => 'Gestion\\GestionBundle\\Controller\\CvuploadController::newAction',));
            }

            // cvupload_create
            if (preg_match('#^/cvupload/(?P<idemp>\\d+)/create$#s', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_cvupload_create;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'cvupload_create')), array (  '_controller' => 'Gestion\\GestionBundle\\Controller\\CvuploadController::createAction',));
            }
            not_cvupload_create:

            // cvupload_edit
            if (preg_match('#^/cvupload/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'cvupload_edit')), array (  '_controller' => 'Gestion\\GestionBundle\\Controller\\CvuploadController::editAction',));
            }

            // cvupload_update
            if (preg_match('#^/cvupload/(?P<id>[^/]++)/update$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('POST', 'PUT'))) {
                    $allow = array_merge($allow, array('POST', 'PUT'));
                    goto not_cvupload_update;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'cvupload_update')), array (  '_controller' => 'Gestion\\GestionBundle\\Controller\\CvuploadController::updateAction',));
            }
            not_cvupload_update:

            // cvupload_delete
            if (preg_match('#^/cvupload/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('POST', 'DELETE'))) {
                    $allow = array_merge($allow, array('POST', 'DELETE'));
                    goto not_cvupload_delete;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'cvupload_delete')), array (  '_controller' => 'Gestion\\GestionBundle\\Controller\\CvuploadController::deleteAction',));
            }
            not_cvupload_delete:

        }

        if (0 === strpos($pathinfo, '/sa')) {
            if (0 === strpos($pathinfo, '/sanction')) {
                // sanction
                if (preg_match('#^/sanction/(?P<idemp>\\d+)/?$#s', $pathinfo, $matches)) {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'sanction');
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'sanction')), array (  '_controller' => 'Gestion\\GestionBundle\\Controller\\SanctionController::indexAction',));
                }

                // sanction_show
                if (preg_match('#^/sanction/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'sanction_show')), array (  '_controller' => 'Gestion\\GestionBundle\\Controller\\SanctionController::showAction',));
                }

                // sanction_new
                if (preg_match('#^/sanction/(?P<idemp>\\d+)/new$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'sanction_new')), array (  '_controller' => 'Gestion\\GestionBundle\\Controller\\SanctionController::newAction',));
                }

                // sanction_create
                if (preg_match('#^/sanction/(?P<idemp>\\d+)/create$#s', $pathinfo, $matches)) {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_sanction_create;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'sanction_create')), array (  '_controller' => 'Gestion\\GestionBundle\\Controller\\SanctionController::createAction',));
                }
                not_sanction_create:

                // sanction_edit
                if (preg_match('#^/sanction/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'sanction_edit')), array (  '_controller' => 'Gestion\\GestionBundle\\Controller\\SanctionController::editAction',));
                }

                // sanction_update
                if (preg_match('#^/sanction/(?P<id>[^/]++)/update$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('POST', 'PUT'))) {
                        $allow = array_merge($allow, array('POST', 'PUT'));
                        goto not_sanction_update;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'sanction_update')), array (  '_controller' => 'Gestion\\GestionBundle\\Controller\\SanctionController::updateAction',));
                }
                not_sanction_update:

                // sanction_delete
                if (preg_match('#^/sanction/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('POST', 'DELETE'))) {
                        $allow = array_merge($allow, array('POST', 'DELETE'));
                        goto not_sanction_delete;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'sanction_delete')), array (  '_controller' => 'Gestion\\GestionBundle\\Controller\\SanctionController::deleteAction',));
                }
                not_sanction_delete:

            }

            if (0 === strpos($pathinfo, '/salairecompo')) {
                // salairecompo
                if (rtrim($pathinfo, '/') === '/salairecompo') {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'salairecompo');
                    }

                    return array (  '_controller' => 'Gestion\\GestionBundle\\Controller\\salairecompoController::indexAction',  '_route' => 'salairecompo',);
                }

                // salairecompo_show
                if (preg_match('#^/salairecompo/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'salairecompo_show')), array (  '_controller' => 'Gestion\\GestionBundle\\Controller\\salairecompoController::showAction',));
                }

                // salairecompo_new
                if ($pathinfo === '/salairecompo/new') {
                    return array (  '_controller' => 'Gestion\\GestionBundle\\Controller\\salairecompoController::newAction',  '_route' => 'salairecompo_new',);
                }

                // salairecompo_create
                if ($pathinfo === '/salairecompo/create') {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_salairecompo_create;
                    }

                    return array (  '_controller' => 'Gestion\\GestionBundle\\Controller\\salairecompoController::createAction',  '_route' => 'salairecompo_create',);
                }
                not_salairecompo_create:

                // salairecompo_edit
                if (preg_match('#^/salairecompo/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'salairecompo_edit')), array (  '_controller' => 'Gestion\\GestionBundle\\Controller\\salairecompoController::editAction',));
                }

                // salairecompo_update
                if (preg_match('#^/salairecompo/(?P<id>[^/]++)/update$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('POST', 'PUT'))) {
                        $allow = array_merge($allow, array('POST', 'PUT'));
                        goto not_salairecompo_update;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'salairecompo_update')), array (  '_controller' => 'Gestion\\GestionBundle\\Controller\\salairecompoController::updateAction',));
                }
                not_salairecompo_update:

                // salairecompo_delete
                if (preg_match('#^/salairecompo/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('POST', 'DELETE'))) {
                        $allow = array_merge($allow, array('POST', 'DELETE'));
                        goto not_salairecompo_delete;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'salairecompo_delete')), array (  '_controller' => 'Gestion\\GestionBundle\\Controller\\salairecompoController::deleteAction',));
                }
                not_salairecompo_delete:

            }

        }

        if (0 === strpos($pathinfo, '/mission')) {
            // mission
            if (preg_match('#^/mission/(?P<idemp>[^/]++)/?$#s', $pathinfo, $matches)) {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'mission');
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'mission')), array (  '_controller' => 'Gestion\\GestionBundle\\Controller\\MissionController::indexAction',));
            }

            // mission_show
            if (preg_match('#^/mission/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'mission_show')), array (  '_controller' => 'Gestion\\GestionBundle\\Controller\\MissionController::showAction',));
            }

            // mission_pdf
            if (preg_match('#^/mission/(?P<idemp>[^/]++)/(?P<idmission>[^/]++)/mission_pdf$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'mission_pdf')), array (  '_controller' => 'Gestion\\GestionBundle\\Controller\\MissionController::mission_pdfAction',));
            }

            // mission_new
            if (preg_match('#^/mission/(?P<idemp>[^/]++)/new$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'mission_new')), array (  '_controller' => 'Gestion\\GestionBundle\\Controller\\MissionController::newAction',));
            }

            // mission_create
            if (preg_match('#^/mission/(?P<idemp>[^/]++)/create$#s', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_mission_create;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'mission_create')), array (  '_controller' => 'Gestion\\GestionBundle\\Controller\\MissionController::createAction',));
            }
            not_mission_create:

            // mission_edit
            if (preg_match('#^/mission/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'mission_edit')), array (  '_controller' => 'Gestion\\GestionBundle\\Controller\\MissionController::editAction',));
            }

            // mission_update
            if (preg_match('#^/mission/(?P<id>[^/]++)/update$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('POST', 'PUT'))) {
                    $allow = array_merge($allow, array('POST', 'PUT'));
                    goto not_mission_update;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'mission_update')), array (  '_controller' => 'Gestion\\GestionBundle\\Controller\\MissionController::updateAction',));
            }
            not_mission_update:

            // mission_delete
            if (preg_match('#^/mission/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('POST', 'DELETE'))) {
                    $allow = array_merge($allow, array('POST', 'DELETE'));
                    goto not_mission_delete;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'mission_delete')), array (  '_controller' => 'Gestion\\GestionBundle\\Controller\\MissionController::deleteAction',));
            }
            not_mission_delete:

        }

        if (0 === strpos($pathinfo, '/salaire')) {
            // banque
            if (preg_match('#^/salaire/(?P<idemp>\\d+)/?$#s', $pathinfo, $matches)) {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'banque');
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'banque')), array (  '_controller' => 'Gestion\\GestionBundle\\Controller\\BanqueController::indexAction',));
            }

            // banque_show
            if (preg_match('#^/salaire/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'banque_show')), array (  '_controller' => 'Gestion\\GestionBundle\\Controller\\BanqueController::showAction',));
            }

            // banque_new
            if (preg_match('#^/salaire/(?P<idemp>\\d+)/new$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'banque_new')), array (  '_controller' => 'Gestion\\GestionBundle\\Controller\\BanqueController::newAction',));
            }

            // banque_pdf
            if (preg_match('#^/salaire/(?P<idemp>[^/]++)/(?P<idbanque>[^/]++)/banque_pdf$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'banque_pdf')), array (  '_controller' => 'Gestion\\GestionBundle\\Controller\\BanqueController::salaire_pdfAction',));
            }

            // salaire_employe_creation
            if (preg_match('#^/salaire/(?P<idemp>\\d+)/e/sal$#s', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_salaire_employe_creation;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'salaire_employe_creation')), array (  '_controller' => 'Gestion\\GestionBundle\\Controller\\BanqueController::paiesalaireAction',));
            }
            not_salaire_employe_creation:

            // banque_create
            if (preg_match('#^/salaire/(?P<idemp>\\d+)/create$#s', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_banque_create;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'banque_create')), array (  '_controller' => 'Gestion\\GestionBundle\\Controller\\BanqueController::createAction',));
            }
            not_banque_create:

            // banque_edit
            if (preg_match('#^/salaire/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'banque_edit')), array (  '_controller' => 'Gestion\\GestionBundle\\Controller\\BanqueController::editAction',));
            }

            // banque_update
            if (preg_match('#^/salaire/(?P<id>[^/]++)/update$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('POST', 'PUT'))) {
                    $allow = array_merge($allow, array('POST', 'PUT'));
                    goto not_banque_update;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'banque_update')), array (  '_controller' => 'Gestion\\GestionBundle\\Controller\\BanqueController::updateAction',));
            }
            not_banque_update:

            // banque_delete
            if (preg_match('#^/salaire/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('POST', 'DELETE'))) {
                    $allow = array_merge($allow, array('POST', 'DELETE'));
                    goto not_banque_delete;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'banque_delete')), array (  '_controller' => 'Gestion\\GestionBundle\\Controller\\BanqueController::deleteAction',));
            }
            not_banque_delete:

        }

        if (0 === strpos($pathinfo, '/absence')) {
            // absence
            if (preg_match('#^/absence/(?P<idemp>\\d+)/?$#s', $pathinfo, $matches)) {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'absence');
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'absence')), array (  '_controller' => 'Gestion\\GestionBundle\\Controller\\AbsenceController::indexAction',));
            }

            // absence_show
            if (preg_match('#^/absence/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'absence_show')), array (  '_controller' => 'Gestion\\GestionBundle\\Controller\\AbsenceController::showAction',));
            }

            // absence_new
            if (preg_match('#^/absence/(?P<idemp>\\d+)/new$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'absence_new')), array (  '_controller' => 'Gestion\\GestionBundle\\Controller\\AbsenceController::newAction',));
            }

            // absence_create
            if (preg_match('#^/absence/(?P<idemp>\\d+)/create$#s', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_absence_create;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'absence_create')), array (  '_controller' => 'Gestion\\GestionBundle\\Controller\\AbsenceController::createAction',));
            }
            not_absence_create:

            // absence_edit
            if (preg_match('#^/absence/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'absence_edit')), array (  '_controller' => 'Gestion\\GestionBundle\\Controller\\AbsenceController::editAction',));
            }

            // absence_update
            if (preg_match('#^/absence/(?P<id>[^/]++)/update$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('POST', 'PUT'))) {
                    $allow = array_merge($allow, array('POST', 'PUT'));
                    goto not_absence_update;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'absence_update')), array (  '_controller' => 'Gestion\\GestionBundle\\Controller\\AbsenceController::updateAction',));
            }
            not_absence_update:

            // absence_delete
            if (preg_match('#^/absence/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('POST', 'DELETE'))) {
                    $allow = array_merge($allow, array('POST', 'DELETE'));
                    goto not_absence_delete;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'absence_delete')), array (  '_controller' => 'Gestion\\GestionBundle\\Controller\\AbsenceController::deleteAction',));
            }
            not_absence_delete:

        }

        if (0 === strpos($pathinfo, '/con')) {
            if (0 === strpos($pathinfo, '/conge')) {
                // conge
                if (preg_match('#^/conge/(?P<idemp>\\d+)/?$#s', $pathinfo, $matches)) {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'conge');
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'conge')), array (  '_controller' => 'Gestion\\GestionBundle\\Controller\\CongeController::indexAction',));
                }

                // conge_show
                if (preg_match('#^/conge/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'conge_show')), array (  '_controller' => 'Gestion\\GestionBundle\\Controller\\CongeController::showAction',));
                }

                // conge_pdf
                if (preg_match('#^/conge/(?P<idemp>[^/]++)/(?P<idconge>[^/]++)/conge_pdf$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'conge_pdf')), array (  '_controller' => 'Gestion\\GestionBundle\\Controller\\CongeController::conge_pdfAction',));
                }

                // conge_new
                if (preg_match('#^/conge/(?P<idemp>\\d+)/new$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'conge_new')), array (  '_controller' => 'Gestion\\GestionBundle\\Controller\\CongeController::newAction',));
                }

                // conge_create
                if (preg_match('#^/conge/(?P<idemp>\\d+)/create$#s', $pathinfo, $matches)) {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_conge_create;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'conge_create')), array (  '_controller' => 'Gestion\\GestionBundle\\Controller\\CongeController::createAction',));
                }
                not_conge_create:

                // conge_edit
                if (preg_match('#^/conge/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'conge_edit')), array (  '_controller' => 'Gestion\\GestionBundle\\Controller\\CongeController::editAction',));
                }

                // conge_update
                if (preg_match('#^/conge/(?P<id>[^/]++)/update$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('POST', 'PUT'))) {
                        $allow = array_merge($allow, array('POST', 'PUT'));
                        goto not_conge_update;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'conge_update')), array (  '_controller' => 'Gestion\\GestionBundle\\Controller\\CongeController::updateAction',));
                }
                not_conge_update:

                // conge_delete
                if (preg_match('#^/conge/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('POST', 'DELETE'))) {
                        $allow = array_merge($allow, array('POST', 'DELETE'));
                        goto not_conge_delete;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'conge_delete')), array (  '_controller' => 'Gestion\\GestionBundle\\Controller\\CongeController::deleteAction',));
                }
                not_conge_delete:

            }

            if (0 === strpos($pathinfo, '/contrat')) {
                // contrat
                if (preg_match('#^/contrat/(?P<idemp>\\d+)/?$#s', $pathinfo, $matches)) {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'contrat');
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'contrat')), array (  '_controller' => 'Gestion\\GestionBundle\\Controller\\ContratController::indexAction',));
                }

                // contrat_show
                if (preg_match('#^/contrat/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'contrat_show')), array (  '_controller' => 'Gestion\\GestionBundle\\Controller\\ContratController::showAction',));
                }

                // contrat_new
                if (preg_match('#^/contrat/(?P<idemp>\\d+)/new$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'contrat_new')), array (  '_controller' => 'Gestion\\GestionBundle\\Controller\\ContratController::newAction',));
                }

                // contrat_create
                if (preg_match('#^/contrat/(?P<idemp>\\d+)/create$#s', $pathinfo, $matches)) {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_contrat_create;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'contrat_create')), array (  '_controller' => 'Gestion\\GestionBundle\\Controller\\ContratController::createAction',));
                }
                not_contrat_create:

                // contrat_edit
                if (preg_match('#^/contrat/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'contrat_edit')), array (  '_controller' => 'Gestion\\GestionBundle\\Controller\\ContratController::editAction',));
                }

                // contrat_update
                if (preg_match('#^/contrat/(?P<id>[^/]++)/update$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('POST', 'PUT'))) {
                        $allow = array_merge($allow, array('POST', 'PUT'));
                        goto not_contrat_update;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'contrat_update')), array (  '_controller' => 'Gestion\\GestionBundle\\Controller\\ContratController::updateAction',));
                }
                not_contrat_update:

                // contrat_delete
                if (preg_match('#^/contrat/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('POST', 'DELETE'))) {
                        $allow = array_merge($allow, array('POST', 'DELETE'));
                        goto not_contrat_delete;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'contrat_delete')), array (  '_controller' => 'Gestion\\GestionBundle\\Controller\\ContratController::deleteAction',));
                }
                not_contrat_delete:

            }

        }

        if (0 === strpos($pathinfo, '/grade')) {
            // grade
            if (rtrim($pathinfo, '/') === '/grade') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'grade');
                }

                return array (  '_controller' => 'Gestion\\GestionBundle\\Controller\\GradeController::indexAction',  '_route' => 'grade',);
            }

            // grade_show
            if (preg_match('#^/grade/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'grade_show')), array (  '_controller' => 'Gestion\\GestionBundle\\Controller\\GradeController::showAction',));
            }

            // grade_new
            if ($pathinfo === '/grade/new') {
                return array (  '_controller' => 'Gestion\\GestionBundle\\Controller\\GradeController::newAction',  '_route' => 'grade_new',);
            }

            // grade_create
            if ($pathinfo === '/grade/create') {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_grade_create;
                }

                return array (  '_controller' => 'Gestion\\GestionBundle\\Controller\\GradeController::createAction',  '_route' => 'grade_create',);
            }
            not_grade_create:

            // grade_edit
            if (preg_match('#^/grade/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'grade_edit')), array (  '_controller' => 'Gestion\\GestionBundle\\Controller\\GradeController::editAction',));
            }

            // grade_update
            if (preg_match('#^/grade/(?P<id>[^/]++)/update$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('POST', 'PUT'))) {
                    $allow = array_merge($allow, array('POST', 'PUT'));
                    goto not_grade_update;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'grade_update')), array (  '_controller' => 'Gestion\\GestionBundle\\Controller\\GradeController::updateAction',));
            }
            not_grade_update:

            // grade_delete
            if (preg_match('#^/grade/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('POST', 'DELETE'))) {
                    $allow = array_merge($allow, array('POST', 'DELETE'));
                    goto not_grade_delete;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'grade_delete')), array (  '_controller' => 'Gestion\\GestionBundle\\Controller\\GradeController::deleteAction',));
            }
            not_grade_delete:

        }

        if (0 === strpos($pathinfo, '/etude')) {
            // etude
            if (rtrim($pathinfo, '/') === '/etude') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'etude');
                }

                return array (  '_controller' => 'Gestion\\GestionBundle\\Controller\\EtudeController::indexAction',  '_route' => 'etude',);
            }

            // etude_show
            if (preg_match('#^/etude/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'etude_show')), array (  '_controller' => 'Gestion\\GestionBundle\\Controller\\EtudeController::showAction',));
            }

            // etude_new
            if ($pathinfo === '/etude/new') {
                return array (  '_controller' => 'Gestion\\GestionBundle\\Controller\\EtudeController::newAction',  '_route' => 'etude_new',);
            }

            // etude_create
            if ($pathinfo === '/etude/create') {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_etude_create;
                }

                return array (  '_controller' => 'Gestion\\GestionBundle\\Controller\\EtudeController::createAction',  '_route' => 'etude_create',);
            }
            not_etude_create:

            // etude_edit
            if (preg_match('#^/etude/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'etude_edit')), array (  '_controller' => 'Gestion\\GestionBundle\\Controller\\EtudeController::editAction',));
            }

            // etude_update
            if (preg_match('#^/etude/(?P<id>[^/]++)/update$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('POST', 'PUT'))) {
                    $allow = array_merge($allow, array('POST', 'PUT'));
                    goto not_etude_update;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'etude_update')), array (  '_controller' => 'Gestion\\GestionBundle\\Controller\\EtudeController::updateAction',));
            }
            not_etude_update:

            // etude_delete
            if (preg_match('#^/etude/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('POST', 'DELETE'))) {
                    $allow = array_merge($allow, array('POST', 'DELETE'));
                    goto not_etude_delete;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'etude_delete')), array (  '_controller' => 'Gestion\\GestionBundle\\Controller\\EtudeController::deleteAction',));
            }
            not_etude_delete:

        }

        if (0 === strpos($pathinfo, '/service')) {
            // service
            if (rtrim($pathinfo, '/') === '/service') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'service');
                }

                return array (  '_controller' => 'Gestion\\GestionBundle\\Controller\\ServiceController::indexAction',  '_route' => 'service',);
            }

            // service_show
            if (preg_match('#^/service/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'service_show')), array (  '_controller' => 'Gestion\\GestionBundle\\Controller\\ServiceController::showAction',));
            }

            // service_new
            if ($pathinfo === '/service/new') {
                return array (  '_controller' => 'Gestion\\GestionBundle\\Controller\\ServiceController::newAction',  '_route' => 'service_new',);
            }

            // service_create
            if ($pathinfo === '/service/create') {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_service_create;
                }

                return array (  '_controller' => 'Gestion\\GestionBundle\\Controller\\ServiceController::createAction',  '_route' => 'service_create',);
            }
            not_service_create:

            // service_edit
            if (preg_match('#^/service/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'service_edit')), array (  '_controller' => 'Gestion\\GestionBundle\\Controller\\ServiceController::editAction',));
            }

            // service_update
            if (preg_match('#^/service/(?P<id>[^/]++)/update$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('POST', 'PUT'))) {
                    $allow = array_merge($allow, array('POST', 'PUT'));
                    goto not_service_update;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'service_update')), array (  '_controller' => 'Gestion\\GestionBundle\\Controller\\ServiceController::updateAction',));
            }
            not_service_update:

            // service_delete
            if (preg_match('#^/service/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('POST', 'DELETE'))) {
                    $allow = array_merge($allow, array('POST', 'DELETE'));
                    goto not_service_delete;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'service_delete')), array (  '_controller' => 'Gestion\\GestionBundle\\Controller\\ServiceController::deleteAction',));
            }
            not_service_delete:

        }

        if (0 === strpos($pathinfo, '/fonction')) {
            // fonction
            if (rtrim($pathinfo, '/') === '/fonction') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'fonction');
                }

                return array (  '_controller' => 'Gestion\\GestionBundle\\Controller\\FonctionController::indexAction',  '_route' => 'fonction',);
            }

            // fonction_show
            if (preg_match('#^/fonction/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'fonction_show')), array (  '_controller' => 'Gestion\\GestionBundle\\Controller\\FonctionController::showAction',));
            }

            // fonction_new
            if ($pathinfo === '/fonction/new') {
                return array (  '_controller' => 'Gestion\\GestionBundle\\Controller\\FonctionController::newAction',  '_route' => 'fonction_new',);
            }

            // fonction_create
            if ($pathinfo === '/fonction/create') {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_fonction_create;
                }

                return array (  '_controller' => 'Gestion\\GestionBundle\\Controller\\FonctionController::createAction',  '_route' => 'fonction_create',);
            }
            not_fonction_create:

            // fonction_edit
            if (preg_match('#^/fonction/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'fonction_edit')), array (  '_controller' => 'Gestion\\GestionBundle\\Controller\\FonctionController::editAction',));
            }

            // fonction_update
            if (preg_match('#^/fonction/(?P<id>[^/]++)/update$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('POST', 'PUT'))) {
                    $allow = array_merge($allow, array('POST', 'PUT'));
                    goto not_fonction_update;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'fonction_update')), array (  '_controller' => 'Gestion\\GestionBundle\\Controller\\FonctionController::updateAction',));
            }
            not_fonction_update:

            // fonction_delete
            if (preg_match('#^/fonction/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('POST', 'DELETE'))) {
                    $allow = array_merge($allow, array('POST', 'DELETE'));
                    goto not_fonction_delete;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'fonction_delete')), array (  '_controller' => 'Gestion\\GestionBundle\\Controller\\FonctionController::deleteAction',));
            }
            not_fonction_delete:

        }

        if (0 === strpos($pathinfo, '/employe')) {
            // employe
            if (rtrim($pathinfo, '/') === '/employe') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'employe');
                }

                return array (  '_controller' => 'Gestion\\GestionBundle\\Controller\\EmployeController::indexAction',  '_route' => 'employe',);
            }

            // employe_show
            if (preg_match('#^/employe/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'employe_show')), array (  '_controller' => 'Gestion\\GestionBundle\\Controller\\EmployeController::showAction',));
            }

            // employe_pdf
            if ($pathinfo === '/employe/employe_pdf') {
                return array (  '_controller' => 'Gestion\\GestionBundle\\Controller\\EmployeController::employe_pdfAction',  '_route' => 'employe_pdf',);
            }

            // employe_new
            if ($pathinfo === '/employe/new') {
                return array (  '_controller' => 'Gestion\\GestionBundle\\Controller\\EmployeController::newAction',  '_route' => 'employe_new',);
            }

            // employe_create
            if ($pathinfo === '/employe/create') {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_employe_create;
                }

                return array (  '_controller' => 'Gestion\\GestionBundle\\Controller\\EmployeController::createAction',  '_route' => 'employe_create',);
            }
            not_employe_create:

            // employe_edit
            if (preg_match('#^/employe/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'employe_edit')), array (  '_controller' => 'Gestion\\GestionBundle\\Controller\\EmployeController::editAction',));
            }

            // employe_update
            if (preg_match('#^/employe/(?P<id>[^/]++)/update$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('POST', 'PUT'))) {
                    $allow = array_merge($allow, array('POST', 'PUT'));
                    goto not_employe_update;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'employe_update')), array (  '_controller' => 'Gestion\\GestionBundle\\Controller\\EmployeController::updateAction',));
            }
            not_employe_update:

            // employe_delete
            if (preg_match('#^/employe/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('POST', 'DELETE'))) {
                    $allow = array_merge($allow, array('POST', 'DELETE'));
                    goto not_employe_delete;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'employe_delete')), array (  '_controller' => 'Gestion\\GestionBundle\\Controller\\EmployeController::deleteAction',));
            }
            not_employe_delete:

        }

        // fos_js_routing_js
        if (0 === strpos($pathinfo, '/js/routing') && preg_match('#^/js/routing(?:\\.(?P<_format>js|json))?$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'fos_js_routing_js')), array (  '_controller' => 'fos_js_routing.controller:indexAction',  '_format' => 'js',));
        }

        // _imagine_my_thumb
        if (0 === strpos($pathinfo, '/media/cache') && preg_match('#^/media/cache/(?P<filter>[A-z0-9_\\-]*)/(?P<path>.+)$#s', $pathinfo, $matches)) {
            if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                $allow = array_merge($allow, array('GET', 'HEAD'));
                goto not__imagine_my_thumb;
            }

            return $this->mergeDefaults(array_replace($matches, array('_route' => '_imagine_my_thumb')), array (  '_controller' => 'imagine.controller:filter',  'filter' => 'my_thumb',));
        }
        not__imagine_my_thumb:

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
