using System;
using System.Collections.Generic;
using System.Data.Entity;
using System.Linq;
using System.Web;

namespace PAI9.Models
{
    public class MusicDbContext: DbContext
    {
        public DbSet<Song> Songs { get; set; }
        public ICollection<Song> Collection { get; set; }

        public System.Data.Entity.DbSet<PAI9.Models.Genre> Genres { get; set; }
    }
}