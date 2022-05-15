<?php

// This file has been auto-generated by the Symfony Routing Component.

return [
    '_preview_error' => [['code', '_format'], ['_controller' => 'error_controller::preview', '_format' => 'html'], ['code' => '\\d+'], [['variable', '.', '[^/]++', '_format'], ['variable', '/', '\\d+', 'code'], ['text', '/_error']], [], []],
    '_wdt' => [['token'], ['_controller' => 'web_profiler.controller.profiler::toolbarAction'], [], [['variable', '/', '[^/]++', 'token'], ['text', '/_wdt']], [], []],
    '_profiler_home' => [[], ['_controller' => 'web_profiler.controller.profiler::homeAction'], [], [['text', '/_profiler/']], [], []],
    '_profiler_search' => [[], ['_controller' => 'web_profiler.controller.profiler::searchAction'], [], [['text', '/_profiler/search']], [], []],
    '_profiler_search_bar' => [[], ['_controller' => 'web_profiler.controller.profiler::searchBarAction'], [], [['text', '/_profiler/search_bar']], [], []],
    '_profiler_phpinfo' => [[], ['_controller' => 'web_profiler.controller.profiler::phpinfoAction'], [], [['text', '/_profiler/phpinfo']], [], []],
    '_profiler_search_results' => [['token'], ['_controller' => 'web_profiler.controller.profiler::searchResultsAction'], [], [['text', '/search/results'], ['variable', '/', '[^/]++', 'token'], ['text', '/_profiler']], [], []],
    '_profiler_open_file' => [[], ['_controller' => 'web_profiler.controller.profiler::openAction'], [], [['text', '/_profiler/open']], [], []],
    '_profiler' => [['token'], ['_controller' => 'web_profiler.controller.profiler::panelAction'], [], [['variable', '/', '[^/]++', 'token'], ['text', '/_profiler']], [], []],
    '_profiler_router' => [['token'], ['_controller' => 'web_profiler.controller.router::panelAction'], [], [['text', '/router'], ['variable', '/', '[^/]++', 'token'], ['text', '/_profiler']], [], []],
    '_profiler_exception' => [['token'], ['_controller' => 'web_profiler.controller.exception_panel::body'], [], [['text', '/exception'], ['variable', '/', '[^/]++', 'token'], ['text', '/_profiler']], [], []],
    '_profiler_exception_css' => [['token'], ['_controller' => 'web_profiler.controller.exception_panel::stylesheet'], [], [['text', '/exception.css'], ['variable', '/', '[^/]++', 'token'], ['text', '/_profiler']], [], []],
    'admin/index' => [[], ['_controller' => 'App\\Controller\\AdminController::index'], [], [['text', '/admin/index']], [], []],
    'admin/Users' => [[], ['_controller' => 'App\\Controller\\AdminController::list_users'], [], [['text', '/admin/Users']], [], []],
    'deleteUser' => [['id'], ['_controller' => 'App\\Controller\\AdminController::deleteUser'], [], [['variable', '/', '[^/]++', 'id'], ['text', '/admin/deleteUser']], [], []],
    'deleteTeam' => [['id'], ['_controller' => 'App\\Controller\\AdminController::deleteTeam'], [], [['variable', '/', '[^/]++', 'id'], ['text', '/admin/deleteTeam']], [], []],
    'admin/Teams' => [[], ['_controller' => 'App\\Controller\\AdminController::list_teams'], [], [['text', '/admin/Teams']], [], []],
    'admin/AddTeam' => [[], ['_controller' => 'App\\Controller\\AdminController::list_addteam'], [], [['text', '/admin/AddTeam']], [], []],
    'UsersPDF' => [[], ['_controller' => 'App\\Controller\\AdminController::UsersPDF'], [], [['text', '/admin/UsersPDF']], [], []],
    'AllUsers' => [[], ['_controller' => 'App\\Controller\\AdminController::All_users'], [], [['text', '/user/AllUsers']], [], []],
    'userss' => [[], ['_controller' => 'App\\Controller\\AdminController::afficherpostsjson'], [], [['text', '/lesusers/']], [], []],
    'delUser' => [[], ['_controller' => 'App\\Controller\\AdminController::adTeam'], [], [['text', '/user/ajTeam']], [], []],
    'allTeam' => [[], ['_controller' => 'App\\Controller\\AdminController::All_teams'], [], [['text', '/user/allTeam']], [], []],
    'delTeamm' => [['id'], ['_controller' => 'App\\Controller\\AdminController::delTeam'], [], [['variable', '/', '[^/]++', 'id'], ['text', '/user/delTeam']], [], []],
    'listannoncesCat' => [[], ['_controller' => 'App\\Controller\\AnnonceCatController::listAnnoncesCat'], [], [['text', '/back/annoncesCat/list']], [], []],
    'delete_annonceCatB' => [['id'], ['_controller' => 'App\\Controller\\AnnonceCatController::deleteAnnonceCat'], [], [['variable', '/', '[^/]++', 'id'], ['text', '/back/annoncesCat/delete']], [], []],
    'editB_annonceCat' => [['id'], ['_controller' => 'App\\Controller\\AnnonceCatController::editAnnonceCatB'], [], [['variable', '', '[^/]++', 'id'], ['text', '/back/annoncesCat/edit']], [], []],
    'addAnnonceCat' => [[], ['_controller' => 'App\\Controller\\AnnonceCatController::addAnnonceCat'], [], [['text', '/back/annoncesCat/add']], [], []],
    'listannonces' => [[], ['_controller' => 'App\\Controller\\AnnonceController::listAnnoncesB'], [], [['text', '/back/annonces/list']], [], []],
    'delete_annonceB' => [['id'], ['_controller' => 'App\\Controller\\AnnonceController::deleteAnnonce'], [], [['variable', '/', '[^/]++', 'id'], ['text', '/back/annonces/delete']], [], []],
    'editB_annonce' => [['id'], ['_controller' => 'App\\Controller\\AnnonceController::editAnnonceB'], [], [['variable', '', '[^/]++', 'id'], ['text', '/back/annonces/edit']], [], []],
    'ajoutAnnonce' => [[], ['_controller' => 'App\\Controller\\AnnonceController::addAnnonce'], [], [['text', '/annonces/add']], [], []],
    'listAnnoncesF' => [[], ['_controller' => 'App\\Controller\\AnnonceController::listAnnoncesF'], [], [['text', '/annonces']], [], []],
    'annonce_show' => [['id'], ['_controller' => 'App\\Controller\\AnnonceController::showAnnonce'], [], [['variable', '', '[^/]++', 'id'], ['text', '/annonces/show']], [], []],
    'edit_annonce' => [['id'], ['_controller' => 'App\\Controller\\AnnonceController::editAnnonce'], [], [['variable', '', '[^/]++', 'id'], ['text', '/annonces/edit']], [], []],
    'delete_annonce' => [['id'], ['_controller' => 'App\\Controller\\AnnonceController::deleteAnnonceF'], [], [['variable', '/', '[^/]++', 'id'], ['text', '/annonces/delete']], [], []],
    'annonesJ' => [[], ['_controller' => 'App\\Controller\\AnnonceController::allAnnonces'], [], [['text', '/liste']], [], []],
    'app_bad_words_index' => [[], ['_controller' => 'App\\Controller\\BadWordsController::index'], [], [['text', '/admin/badwords/']], [], []],
    'app_bad_words_new' => [[], ['_controller' => 'App\\Controller\\BadWordsController::new'], [], [['text', '/admin/badwords/new']], [], []],
    'app_bad_words_show' => [['id'], ['_controller' => 'App\\Controller\\BadWordsController::show'], [], [['variable', '/', '[^/]++', 'id'], ['text', '/admin/badwords']], [], []],
    'app_bad_words_edit' => [['id'], ['_controller' => 'App\\Controller\\BadWordsController::edit'], [], [['text', '/edit'], ['variable', '/', '[^/]++', 'id'], ['text', '/admin/badwords']], [], []],
    'app_bad_words_delete' => [['id'], ['_controller' => 'App\\Controller\\BadWordsController::delete'], [], [['variable', '/', '[^/]++', 'id'], ['text', '/admin/badwords']], [], []],
    'posts_index' => [[], ['_controller' => 'App\\Controller\\BlogController::index'], [], [['text', '/blog']], [], []],
    'afficher_posts' => [['id'], ['_controller' => 'App\\Controller\\BlogController::affiche'], [], [['variable', '/', '[^/]++', 'id'], ['text', '/detail']], [], []],
    'afficher_commentaires' => [['id'], ['_controller' => 'App\\Controller\\BlogController::getCommentaires'], [], [['variable', '/', '[^/]++', 'id'], ['text', '/details']], [], []],
    'comments_new' => [[], ['_controller' => 'App\\Controller\\BlogController::new'], [], [['text', '/blog/add']], [], []],
    'ajoutpost' => [[], ['_controller' => 'App\\Controller\\BlogController::ajoutpost'], [], [['text', '/blog/addpost']], [], []],
    'posts_edit' => [['id'], ['_controller' => 'App\\Controller\\BlogController::edit'], [], [['text', '/edit'], ['variable', '/', '[^/]++', 'id']], [], []],
    'posts_delete' => [['id'], ['_controller' => 'App\\Controller\\BlogController::delete'], [], [['text', '/delete'], ['variable', '/', '[^/]++', 'id']], [], []],
    'comments_edit' => [['id'], ['_controller' => 'App\\Controller\\BlogController::editCommentaire'], [], [['text', '/editC'], ['variable', '/', '[^/]++', 'id']], [], []],
    'commentsdelete' => [['id'], ['_controller' => 'App\\Controller\\BlogController::deleteComment'], [], [['variable', '/', '[^/]++', 'id'], ['text', '/supprimer']], [], []],
    'commentby' => [[], ['_controller' => 'App\\Controller\\BlogController::Allcomments'], [], [['text', '/comment/CommentbyidsJSON/']], [], []],
    'post_like' => [['id'], ['_controller' => 'App\\Controller\\BlogController::like'], [], [['text', '/like'], ['variable', '/', '[^/]++', 'id'], ['text', '/post']], [], []],
    'add_rating' => [['id', 'nbr'], ['_controller' => 'App\\Controller\\BlogController::addRating'], [], [['variable', '/', '[^/]++', 'nbr'], ['variable', '/', '[^/]++', 'id'], ['text', '/rating']], [], []],
    'afficher_toutposts' => [[], ['_controller' => 'App\\Controller\\BlogController::afficherposts'], [], [['text', '/Allposts']], [], []],
    'commentbyid' => [[], ['_controller' => 'App\\Controller\\BlogController::commentsbyID'], [], [['text', '/CommentbyidsJSON/']], [], []],
    'postjson' => [[], ['_controller' => 'App\\Controller\\BlogController::afficherpostsjson'], [], [['text', '/postjson/']], [], []],
    'postbyid' => [['id'], ['_controller' => 'App\\Controller\\BlogController::postssbyID'], [], [['variable', '/', '[^/]++', 'id'], ['text', '/postbyidsJSON']], [], []],
    'commentbypost' => [['id'], ['_controller' => 'App\\Controller\\BlogController::commentsbyidpost'], [], [['variable', '/', '[^/]++', 'id'], ['text', '/commentsbyidpost']], [], []],
    'detail_articlejs' => [[], ['_controller' => 'App\\Controller\\BlogController::detailpostAction'], [], [['text', '/detailpostjs']], [], []],
    'detail_commentjs' => [[], ['_controller' => 'App\\Controller\\BlogController::detailcommentAction'], [], [['text', '/detailcommentjs']], [], []],
    'ajoutJsonComment' => [[], ['_controller' => 'App\\Controller\\BlogController::AjoutJComments'], [], [['text', '/ajoutCJson/new/']], [], []],
    'updateJsonComment' => [['id'], ['_controller' => 'App\\Controller\\BlogController::updateJComments'], [], [['variable', '/', '[^/]++', 'id'], ['text', '/updateCJson']], [], []],
    'deleteComment' => [['id'], ['_controller' => 'App\\Controller\\BlogController::deleteJComments'], [], [['variable', '/', '[^/]++', 'id'], ['text', '/deleteCJson']], [], []],
    'ajoutJsonPost' => [[], ['_controller' => 'App\\Controller\\BlogController::AjoutJPosts'], [], [['text', '/ajoutJson/new']], [], []],
    'updateJsonPost' => [['id'], ['_controller' => 'App\\Controller\\BlogController::updateJPosts'], [], [['variable', '/', '[^/]++', 'id'], ['text', '/updatepostJson']], [], []],
    'deleteJsonComment' => [['id'], ['_controller' => 'App\\Controller\\BlogController::deleteJpost'], [], [['variable', '/', '[^/]++', 'id'], ['text', '/deletepostJson']], [], []],
    '
     * ' => [[], ['_controller' => 'App\\Controller\\CategorieController::index'], [], [['text', '/categorie/']], [], []],
    'categorie_new' => [[], ['_controller' => 'App\\Controller\\CategorieController::new'], [], [['text', '/categorie/new']], [], []],
    'categorie_show' => [['id'], ['_controller' => 'App\\Controller\\CategorieController::show'], [], [['variable', '/', '[^/]++', 'id'], ['text', '/categorie']], [], []],
    'categorie_edit' => [['id'], ['_controller' => 'App\\Controller\\CategorieController::edit'], [], [['text', '/edit'], ['variable', '/', '[^/]++', 'id'], ['text', '/categorie']], [], []],
    'categorie_delete' => [['id'], ['_controller' => 'App\\Controller\\CategorieController::delete'], [], [['variable', '/', '[^/]++', 'id'], ['text', '/categorie']], [], []],
    'add_categorie' => [[], ['_controller' => 'App\\Controller\\CategorieController::addcategorie'], [], [['text', '/categorie/categorie/add3']], [], []],
    'update_categorie' => [['id'], ['_controller' => 'App\\Controller\\CategorieController::modifierCategorieAction'], [], [['variable', '/', '[^/]++', 'id'], ['text', '/categorie/categorie/updatecategorie']], [], []],
    'delete_categorie' => [[], ['_controller' => 'App\\Controller\\CategorieController::deleteCategorieAction'], [], [['text', '/categorie/categorie/deletecategorie']], [], []],
    'liste_categorie' => [[], ['_controller' => 'App\\Controller\\CategorieController::getCategorie'], [], [['text', '/categorie/categorie/liste2']], [], []],
    'list_comments' => [[], ['_controller' => 'App\\Controller\\CommentsController::index'], [], [['text', '/admin/comments/']], [], []],
    'ajout_comments' => [[], ['_controller' => 'App\\Controller\\CommentsController::ajout'], [], [['text', '/admin/comments/ajout']], [], []],
    'voir_comments' => [['id'], ['_controller' => 'App\\Controller\\CommentsController::voir'], [], [['variable', '/', '[^/]++', 'id'], ['text', '/admin/comments']], [], []],
    'modifier_comments' => [['id'], ['_controller' => 'App\\Controller\\CommentsController::modifier'], [], [['variable', '/', '[^/]++', 'id'], ['text', '/admin/comments/modifier']], [], []],
    'supprimer_comments' => [['id'], ['_controller' => 'App\\Controller\\CommentsController::delete'], [], [['variable', '/', '[^/]++', 'id'], ['text', '/admin/comments/supprimer']], [], []],
    'event_index' => [[], ['_controller' => 'App\\Controller\\EventController::index'], [], [['text', '/event/']], [], []],
    'evenement_pdf' => [[], ['_controller' => 'App\\Controller\\EventController::listpdf'], [], [['text', '/event/listevenement']], [], []],
    'DESCr' => [[], ['_controller' => 'App\\Controller\\EventController::TrierParNomr'], [], [['text', '/event/DESCr']], [], []],
    'ASCr' => [[], ['_controller' => 'App\\Controller\\EventController::TrierParNomdesr'], [], [['text', '/event/ASCr']], [], []],
    'event_new' => [[], ['_controller' => 'App\\Controller\\EventController::new'], [], [['text', '/event/new']], [], []],
    'event_show_front' => [[], ['_controller' => 'App\\Controller\\EventController::readFront'], [], [['text', '/event/showFront']], [], []],
    'event_show' => [['id'], ['_controller' => 'App\\Controller\\EventController::show'], [], [['variable', '/', '[^/]++', 'id'], ['text', '/event']], [], []],
    'event_edit' => [['id'], ['_controller' => 'App\\Controller\\EventController::edit'], [], [['text', '/edit'], ['variable', '/', '[^/]++', 'id'], ['text', '/event']], [], []],
    'event_delete' => [['id'], ['_controller' => 'App\\Controller\\EventController::delete'], [], [['variable', '/', '[^/]++', 'id'], ['text', '/event']], [], []],
    'search' => [['searchString'], ['_controller' => 'App\\Controller\\EventController::searchEnt'], [], [['variable', '/', '[^/]++', 'searchString'], ['text', '/event/search1']], [], []],
    'add_event' => [[], ['_controller' => 'App\\Controller\\EventController::AddEvent'], [], [['text', '/event/event/add3']], [], []],
    'update_event' => [['id'], ['_controller' => 'App\\Controller\\EventController::modifierEventAction'], [], [['variable', '/', '[^/]++', 'id'], ['text', '/event/event/updateevent']], [], []],
    'delete_event' => [[], ['_controller' => 'App\\Controller\\EventController::deleteEventAction'], [], [['text', '/event/event/deleteevent']], [], []],
    'liste_event' => [[], ['_controller' => 'App\\Controller\\EventController::getEvent'], [], [['text', '/event/event/liste2']], [], []],
    'app_messages' => [[], ['_controller' => 'App\\Controller\\MessagesController::index'], [], [['text', '/messages']], [], []],
    'list_posts' => [[], ['_controller' => 'App\\Controller\\PostsController::index'], [], [['text', '/admin/posts/']], [], []],
    'ajout_posts' => [[], ['_controller' => 'App\\Controller\\PostsController::ajout'], [], [['text', '/admin/posts/ajout']], [], []],
    'voir_posts' => [['id'], ['_controller' => 'App\\Controller\\PostsController::voir'], [], [['variable', '/', '[^/]++', 'id'], ['text', '/admin/posts']], [], []],
    'modifier_posts' => [['id'], ['_controller' => 'App\\Controller\\PostsController::modifier'], [], [['variable', '/', '[^/]++', 'id'], ['text', '/admin/posts/modifier']], [], []],
    'supprimer_posts' => [['id'], ['_controller' => 'App\\Controller\\PostsController::delete'], [], [['variable', '/', '[^/]++', 'id'], ['text', '/admin/posts/supprimer']], [], []],
    'decroissant' => [[], ['_controller' => 'App\\Controller\\ReclamationController::TrierParNomr'], [], [['text', '/reclamation/decroissant']], [], []],
    'croissant' => [[], ['_controller' => 'App\\Controller\\ReclamationController::TrierParNomdesr'], [], [['text', '/reclamation/croissant']], [], []],
    'reclamation_index' => [[], ['_controller' => 'App\\Controller\\ReclamationController::index'], [], [['text', '/reclamation/']], [], []],
    'reclamation_index2' => [[], ['_controller' => 'App\\Controller\\ReclamationController::index2'], [], [['text', '/reclamation/back']], [], []],
    'reclamation_new' => [[], ['_controller' => 'App\\Controller\\ReclamationController::new'], [], [['text', '/reclamation/new']], [], []],
    'reclamation_show' => [['id'], ['_controller' => 'App\\Controller\\ReclamationController::show'], [], [['variable', '/', '[^/]++', 'id'], ['text', '/reclamation']], [], []],
    'reclamation_show_back' => [['id'], ['_controller' => 'App\\Controller\\ReclamationController::show2'], [], [['variable', '/', '[^/]++', 'id'], ['text', '/reclamation/back']], [], []],
    'reclamation_edit' => [['id'], ['_controller' => 'App\\Controller\\ReclamationController::edit'], [], [['text', '/edit'], ['variable', '/', '[^/]++', 'id'], ['text', '/reclamation']], [], []],
    'reclamation_delete' => [['id'], ['_controller' => 'App\\Controller\\ReclamationController::delete'], [], [['variable', '/', '[^/]++', 'id'], ['text', '/reclamation']], [], []],
    'reclamation_delete_back' => [['id'], ['_controller' => 'App\\Controller\\ReclamationController::delete2'], [], [['variable', '/', '[^/]++', 'id'], ['text', '/reclamation/back']], [], []],
    'reponse_new2' => [['id'], ['_controller' => 'App\\Controller\\ReclamationController::newreponse'], [], [['variable', '/', '[^/]++', 'id'], ['text', '/reclamation/newreponse']], [], []],
    'order' => [['searchString'], ['_controller' => 'App\\Controller\\ReclamationController::index3'], [], [['variable', '/', '[^/]++', 'searchString'], ['text', '/reclamation/order1']], [], []],
    'add_reclamation' => [[], ['_controller' => 'App\\Controller\\ReclamationController::addreclamation'], [], [['text', '/reclamation/reclamation/add3']], [], []],
    'update_reclamation' => [['id'], ['_controller' => 'App\\Controller\\ReclamationController::modifierReclamationAction'], [], [['variable', '/', '[^/]++', 'id'], ['text', '/reclamation/reclamation/updatereclamation']], [], []],
    'delete_reclamation' => [[], ['_controller' => 'App\\Controller\\ReclamationController::deleteReclamationAction'], [], [['text', '/reclamation/reclamation/deletereclamation']], [], []],
    'liste_reclamation' => [[], ['_controller' => 'App\\Controller\\ReclamationController::getReclamation'], [], [['text', '/reclamation/reclamation/liste2']], [], []],
    'reponse_index' => [[], ['_controller' => 'App\\Controller\\ReponseController::index'], [], [['text', '/reponse/']], [], []],
    'reponse_new' => [[], ['_controller' => 'App\\Controller\\ReponseController::new'], [], [['text', '/reponse/new']], [], []],
    'reponse_show' => [['id'], ['_controller' => 'App\\Controller\\ReponseController::show'], [], [['variable', '/', '[^/]++', 'id'], ['text', '/reponse']], [], []],
    'reponse_edit' => [['id'], ['_controller' => 'App\\Controller\\ReponseController::edit'], [], [['text', '/edit'], ['variable', '/', '[^/]++', 'id'], ['text', '/reponse']], [], []],
    'reponse_delete' => [['id'], ['_controller' => 'App\\Controller\\ReponseController::delete'], [], [['variable', '/', '[^/]++', 'id'], ['text', '/reponse']], [], []],
    'add_reponse' => [[], ['_controller' => 'App\\Controller\\ReponseController::AddReponse'], [], [['text', '/reponse/reponse/add3']], [], []],
    'update_reponse' => [['id'], ['_controller' => 'App\\Controller\\ReponseController::modifierReponseAction'], [], [['variable', '/', '[^/]++', 'id'], ['text', '/reponse/reponse/updatereponse']], [], []],
    'delete_reponse' => [[], ['_controller' => 'App\\Controller\\ReponseController::deleteReponseAction'], [], [['text', '/reponse/reponse/deletereponse']], [], []],
    'liste_reponse' => [[], ['_controller' => 'App\\Controller\\ReponseController::getReponse'], [], [['text', '/reponse/reponse/liste2']], [], []],
    'statistique' => [[], ['_controller' => 'App\\Controller\\StatistiqueController::index'], [], [['text', '/statistique']], [], []],
    'Home' => [[], ['_controller' => 'App\\Controller\\TestController::Home'], [], [['text', '/']], [], []],
    'blog' => [[], ['_controller' => 'App\\Controller\\TestController::Forum'], [], [['text', '/blog']], [], []],
    'Marketplace' => [[], ['_controller' => 'App\\Controller\\TestController::Marketplace'], [], [['text', '/Marketplace']], [], []],
    'Annoces' => [[], ['_controller' => 'App\\Controller\\TestController::Annoces'], [], [['text', '/Annoces']], [], []],
    'Events' => [[], ['_controller' => 'App\\Controller\\TestController::Events'], [], [['text', '/Events']], [], []],
    'admin' => [[], ['_controller' => 'App\\Controller\\TestController::index'], [], [['text', '/admin']], [], []],
    'listUsers' => [[], ['_controller' => 'App\\Controller\\TestController::listUsers'], [], [['text', '/listUsers']], [], []],
    'ddProduct' => [[], ['_controller' => 'App\\Controller\\TestController::addProduct'], [], [['text', '/addProduct']], [], []],
    'listProduct' => [[], ['_controller' => 'App\\Controller\\TestController::listProduct'], [], [['text', '/listProduct']], [], []],
    'posts' => [[], ['_controller' => 'App\\Controller\\TestController::posts'], [], [['text', '/posts']], [], []],
    'comments' => [[], ['_controller' => 'App\\Controller\\TestController::comments'], [], [['text', '/comments']], [], []],
    'showAnnouncement' => [[], ['_controller' => 'App\\Controller\\TestController::showAnnouncement'], [], [['text', '/showAnnouncement']], [], []],
    'addAnnouncement' => [[], ['_controller' => 'App\\Controller\\TestController::addAnnouncement'], [], [['text', '/addAnnouncement']], [], []],
    'showEvent' => [[], ['_controller' => 'App\\Controller\\TestController::showEvent'], [], [['text', '/showEvent']], [], []],
    'addEvent' => [[], ['_controller' => 'App\\Controller\\TestController::addEvent'], [], [['text', '/addEvent']], [], []],
    'usersby' => [['id'], ['_controller' => 'App\\Controller\\TestController::Allusers'], [], [['variable', '/', '[^/]++', 'id'], ['text', '/user/userbyidsJSON']], [], []],
    'user/registration' => [[], ['_controller' => 'App\\Controller\\UserController::registration'], [], [['text', '/user/registration']], [], []],
    'activation' => [['token'], ['_controller' => 'App\\Controller\\UserController::activation'], [], [['variable', '/', '[^/]++', 'token'], ['text', '/user/activation']], [], []],
    'login' => [[], ['_controller' => 'App\\Controller\\UserController::login'], [], [['text', '/user/connexion']], [], []],
    'logout' => [[], ['_controller' => 'App\\Controller\\UserController::logout'], [], [['text', '/logout']], [], []],
    'JoinTeam' => [['id'], ['_controller' => 'App\\Controller\\UserController::JoinTeam'], [], [['variable', '/', '[^/]++', 'id'], ['text', '/user/Teams']], [], []],
    'QuitTeam' => [[], ['_controller' => 'App\\Controller\\UserController::QuitTeam'], [], [['text', '/user/quitTeams']], [], []],
    'user/Teams' => [[], ['_controller' => 'App\\Controller\\UserController::list_teams'], [], [['text', '/user/Teams']], [], []],
    'signup' => [[], ['_controller' => 'App\\Controller\\UserController::signupAction'], [], [['text', '/user/signup']], [], []],
    'signin' => [[], ['_controller' => 'App\\Controller\\UserController::signinAction'], [], [['text', '/user/signin']], [], []],
    'editUser' => [[], ['_controller' => 'App\\Controller\\UserController::edituser'], [], [['text', '/user/editUser']], [], []],
];
