using System;
using System.Collections;
using System.Collections.Generic;
using System.Text;
namespace Crime
{
    #region Crime
    public class Crime
    {
        #region Member Variables
        protected int _no;
        protected string _ccn_acmo_no;
        protected string _car_no;
        protected string _nature;
        protected string _victim_complainant;
        protected string _subjects;
        protected string _date_assigned;
        protected string _date_terminated;
        protected string _agent_on_case;
        protected string _status;
        #endregion
        #region Constructors
        public Crime() { }
        public Crime(int no, string ccn_acmo_no, string car_no, string nature, string victim_complainant, string subjects, string date_assigned, string date_terminated, string agent_on_case, string status)
        {
            this._no=no;
            this._ccn_acmo_no=ccn_acmo_no;
            this._car_no=car_no;
            this._nature=nature;
            this._victim_complainant=victim_complainant;
            this._subjects=subjects;
            this._date_assigned=date_assigned;
            this._date_terminated=date_terminated;
            this._agent_on_case=agent_on_case;
            this._status=status;
        }
        #endregion
        #region Public Properties
        public virtual int No
        {
            get {return _no;}
            set {_no=value;}
        }
        public virtual string Ccn_acmo_no
        {
            get {return _ccn_acmo_no;}
            set {_ccn_acmo_no=value;}
        }
        public virtual string Car_no
        {
            get {return _car_no;}
            set {_car_no=value;}
        }
        public virtual string Nature
        {
            get {return _nature;}
            set {_nature=value;}
        }
        public virtual string Victim_complainant
        {
            get {return _victim_complainant;}
            set {_victim_complainant=value;}
        }
        public virtual string Subjects
        {
            get {return _subjects;}
            set {_subjects=value;}
        }
        public virtual string Date_assigned
        {
            get {return _date_assigned;}
            set {_date_assigned=value;}
        }
        public virtual string Date_terminated
        {
            get {return _date_terminated;}
            set {_date_terminated=value;}
        }
        public virtual string Agent_on_case
        {
            get {return _agent_on_case;}
            set {_agent_on_case=value;}
        }
        public virtual string Status
        {
            get {return _status;}
            set {_status=value;}
        }
        #endregion
    }
    #endregion
}