﻿using System;
using System.Collections.Generic;
using System.Linq;
using System.Web;
using System.Web.Mvc;
using System.Web.Routing;

namespace PAI9
{
    public class RouteConfig
    {
        public static void RegisterRoutes(RouteCollection routes)
        {
            routes.IgnoreRoute("{resource}.axd/{*pathInfo}");

            /*routes.MapRoute(
                name: "DefaultSquare",
                url: "",
                defaults: new { controller = "Songs", action = "Square", id = 23 }
            );*/

            routes.MapRoute(
                name: "Default",
                url: "{controller}/{action}/{id}",
                defaults: new { controller = "Songs", action = "Index", id = UrlParameter.Optional }
            );

            routes.MapRoute(
                name: "Square",
                url: "Songs/Square/{id}",
                defaults: new { id = UrlParameter.Optional }
            );
        }
    }
}
