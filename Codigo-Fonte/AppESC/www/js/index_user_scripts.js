(function()
{
 "use strict";
 /*
   hook up event handlers 
 */
 function register_event_handlers()
 {
         /* listitem  Novidades */
    $(document).on("click", "#novidades", function(evt)
    {
         activate_subpage("#novidades"); 
        uib_sb.close_all_sidebars();
    });
    
         /* listitem  Inicio */
    $(document).on("click", "#inicio", function(evt)
    {
         activate_subpage("#inicio"); 
        uib_sb.close_all_sidebars();
    });
    
        /* listitem  Cursos */
    $(document).on("click", "#cursos", function(evt)
    {
         activate_subpage("#cursos");
        uib_sb.close_all_sidebars();
    });
    $(document).on("click", ".uib_w_4", function(evt)
    {
         /* Other possible functions are: 
           uib_sb.open_sidebar($sb)
           uib_sb.close_sidebar($sb)
           uib_sb.toggle_sidebar($sb)
            uib_sb.close_all_sidebars()
          See js/sidebar.js for the full sidebar API */
        
         uib_sb.toggle_sidebar($(".uib_w_2"));  
    });
    
        /* listitem  Editais */
    
    
        /* listitem  Aprovados */
    
    
        /* listitem  Eventos */
    
    
        /* listitem  Horários */
    $(document).on("click", "#horarios", function(evt)
    {
         activate_subpage("#horarios"); 
        uib_sb.close_all_sidebars();
    });
    
        /* listitem  Turmas */
    $(document).on("click", "#turmas", function(evt)
    {
         activate_subpage("#turmas"); 
        uib_sb.close_all_sidebars();
    });
    
        /* listitem  #aprovados */
    
    
        /* listitem  #aprovados */
    $(document).on("click", "#aprovados", function(evt)
    {
         activate_subpage("#aprovados"); 
        uib_sb.close_all_sidebars();
    });
    
        /* listitem  #eventos */
    $(document).on("click", "#eventos", function(evt)
    {
         activate_subpage("#eventos"); 
        uib_sb.close_all_sidebars();
    });
    
        /* listitem  Aprovados */
    
    
        /* listitem  Eventos */
    
    
        /* listitem  Horários */
    
    
        /* listitem  Turmas */
    
    
        /* listitem  Editais */
    $(document).on("click", "#editais", function(evt)
    {
         activate_subpage("#editais"); 
        uib_sb.close_all_sidebars();
    });
    
        /* listitem  Início */
    $(document).on("click", ".uib_w_6", function(evt)
    {
         activate_subpage("#inicio"); 
         uib_sb.close_all_sidebars();
    });
    
        /* listitem  Cursos */
    $(document).on("click", ".uib_w_9", function(evt)
    {
         activate_subpage("#cursos"); 
        uib_sb.close_all_sidebars();
    });
    
        /* listitem  Novidades */
    $(document).on("click", ".uib_w_7", function(evt)
    {
         activate_subpage("#novidades"); 
         uib_sb.close_all_sidebars();
    });
    
        /* listitem  Aprovados */
    
    
        /* listitem  Eventos */
    $(document).on("click", ".uib_w_8", function(evt)
    {
         activate_subpage("#eventos"); 
        uib_sb.close_all_sidebars();
    });
    
        /* listitem  Horários */
    $(document).on("click", ".uib_w_8", function(evt)
    {
         activate_subpage("#horarios"); 
    });
    
        /* listitem  Turmas */
    $(document).on("click", ".uib_w_8", function(evt)
    {
         activate_subpage("#turmas"); 
    });
    
        /* listitem  Editais */
    $(document).on("click", ".uib_w_8", function(evt)
    {
         activate_subpage("#editais"); 
    });
    
        /* listitem  Eventos */
    $(document).on("click", ".uib_w_8", function(evt)
    {
         activate_subpage("#eventos"); 
        uib_sb.close_all_sidebars();
    });
    
        /* listitem  Aprovados */
    $(document).on("click", ".uib_w_10", function(evt)
    {
         activate_subpage("#aprovados"); 
        uib_sb.close_all_sidebars();
    });
    
        /* listitem  Horários */
    $(document).on("click", ".uib_w_11", function(evt)
    {
         activate_subpage("#horarios"); 
        uib_sb.close_all_sidebars();
    });
    
        /* listitem  Turmas */
    $(document).on("click", ".uib_w_12", function(evt)
    {
         activate_subpage("#turmas"); 
        uib_sb.close_all_sidebars();
    });
    
        /* listitem  Editais */
    $(document).on("click", ".uib_w_13", function(evt)
    {
         activate_subpage("#editais"); 
        uib_sb.close_all_sidebars();
    });
    
        /* button  Atualizar */
    $(document).on("click", ".uib_w_16", function(evt)
    {
        /* your code goes here */ 
            
            window.location="index.html";
    });
    
    }
 document.addEventListener("app.Ready", register_event_handlers, false);
})();
