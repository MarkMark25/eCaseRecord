using System;
using System.Collections;
using System.Collections.Generic;
using System.Text;
namespace Login
{
    #region History
    public class History
    {
        #region Member Variables
        protected int _historyid;
        protected int _userid;
        protected DateTime _login;
        protected DateTime _logout;
        protected unknown _duration;
        protected unknown _created_at;
        protected unknown _updated_at;
        #endregion
        #region Constructors
        public History() { }
        public History(int userid, DateTime login, DateTime logout, unknown duration, unknown created_at, unknown updated_at)
        {
            this._userid=userid;
            this._login=login;
            this._logout=logout;
            this._duration=duration;
            this._created_at=created_at;
            this._updated_at=updated_at;
        }
        #endregion
        #region Public Properties
        public virtual int Historyid
        {
            get {return _historyid;}
            set {_historyid=value;}
        }
        public virtual int Userid
        {
            get {return _userid;}
            set {_userid=value;}
        }
        public virtual DateTime Login
        {
            get {return _login;}
            set {_login=value;}
        }
        public virtual DateTime Logout
        {
            get {return _logout;}
            set {_logout=value;}
        }
        public virtual unknown Duration
        {
            get {return _duration;}
            set {_duration=value;}
        }
        public virtual unknown Created_at
        {
            get {return _created_at;}
            set {_created_at=value;}
        }
        public virtual unknown Updated_at
        {
            get {return _updated_at;}
            set {_updated_at=value;}
        }
        #endregion
    }
    #endregion
}