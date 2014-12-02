<?php

namespace XeroPHP\Models\PayrollAU;

use XeroPHP\Remote;

use XeroPHP\Models\PayrollAU\Employee\HomeAddress;
use XeroPHP\Models\PayrollAU\Employee\BankAccount;
use XeroPHP\Models\PayrollAU\Employee\PayTemplate;
use XeroPHP\Models\PayrollAU\Employee\OpeningBalance;
use XeroPHP\Models\PayrollAU\Employee\SuperMembership;

class Employee extends Remote\Object {

    /**
     * First name of employee (max length = 35)
     *
     * @property string FirstName
     */

    /**
     * Last name of employee (max length = 35)
     *
     * @property string LastName
     */

    /**
     * Employee home address. See HomeAddress
     *
     * @property HomeAddress HomeAddress
     */

    /**
     * If you aren’t sure of the exact start date for an employee, you can just enter the start of the
     * current financial year (YYYY-MM-DD)
     *
     * @property \DateTime StartDate
     */

    /**
     * Title of the employee (max length = 10)
     *
     * @property string Title
     */

    /**
     * Middle name(s) of the employee (max length = 35)
     *
     * @property string[] MiddleNames
     */

    /**
     * The email address for the employee (max length = 100)
     *
     * @property string Email
     */

    /**
     * The employee’s gender (M or F)
     *
     * @property string Gender
     */

    /**
     * Employee mobile number (max length = 50)
     *
     * @property string Mobile
     */

    /**
     * Employee’s twitter name, entered as @twittername (max length = 50)
     *
     * @property string TwitterUserName
     */

    /**
     * Boolean (true / false) – set this to true if the employee is authorised to approve other
     * employees’ leave requests
     *
     * @property bool IsAuthorisedToApproveLeave
     */

    /**
     * Booelan – set this to true if the employee is authorised to approve timesheets
     *
     * @property bool IsAuthorisedToApproveTimesheets
     */

    /**
     * Occupation of the employee (max length = 50)
     *
     * @property string Occupation
     */

    /**
     * Employees under an award scheme will be covered by a modern award classification. If you record a
     * classification, it will be included on your payslips (max length = 100)
     *
     * @property string Classification
     */

    /**
     * Xero unique identifier for earnings rate
     *
     * @property string OrdinaryEarningsRateID
     */

    /**
     * Xero unique identifier for payroll calendar for the employee
     *
     * @property string PayrollCalendarID
     */

    /**
     * The Employee Group allows you to report on payroll expenses and liabilities for each group of
     * employees
     *
     * @property string EmployeeGroupName
     */

    /**
     * See BankAccount
     *
     * @property BankAccount[] BankAccounts
     */

    /**
     * See PayTemplate
     *
     * @property PayTemplate PayTemplate
     */

    /**
     * See OpeningBalances
     *
     * @property OpeningBalance[] OpeningBalances
     */

    /**
     * See SuperMemberships
     *
     * @property SuperMembership[] SuperMemberships
     */

    /**
     * Employee Termination Date (YYYY-MM-DD)
     *
     * @property \DateTime TerminationDate
     */

    /**
     * Xero unique identifier for an Employee
     *
     * @property string EmployeeID
     */

    /**
     * See Employee Status Types
     *
     * @property string Status
     */

    /**
     * Last modified timestamp
     *
     * @property \DateTime UpdatedDateUTC
     */


    const STATEABBREVIATION_ACT = 'ACT'; 
    const STATEABBREVIATION_NSW = 'NSW'; 
    const STATEABBREVIATION_NT  = 'NT'; 
    const STATEABBREVIATION_QLD = 'QLD'; 
    const STATEABBREVIATION_SA  = 'SA'; 
    const STATEABBREVIATION_TAS = 'TAS'; 
    const STATEABBREVIATION_VIC = 'VIC'; 
    const STATEABBREVIATION_WA  = 'WA'; 

    const STATUS_CODE_ACTIVE     = 'ACTIVE'; 
    const STATUS_CODE_TERMINATED = 'TERMINATED'; 


    /*
    * Get the resource uri of the class (Contacts) etc
    */
    public static function getResourceURI(){
        return 'Employees';
    }


    /*
    * Get the root node name.  Just the unqualified classname
    */
    public static function getRootNodeName(){
        return 'Employee';
    }


    /*
    * Get the guid property
    */
    public static function getGUIDProperty(){
        return 'EmployeeID';
    }


    /*
    * Get the stem of the API (core.xro) etc
    */
    public static function getAPIStem(){
        return Remote\URL::API_PAYROLL;
    }


    /*
    * Get the supported methods
    */
    public static function getSupportedMethods(){
        return array(
            Remote\Request::METHOD_POST,
            Remote\Request::METHOD_GET
        );
    }

    public static function getProperties(){
        return array(
            'FirstName',
            'LastName',
            'HomeAddress',
            'StartDate',
            'Title',
            'MiddleNames',
            'Email',
            'Gender',
            'Mobile',
            'TwitterUserName',
            'IsAuthorisedToApproveLeave',
            'IsAuthorisedToApproveTimesheets',
            'Occupation',
            'Classification',
            'OrdinaryEarningsRateID',
            'PayrollCalendarID',
            'EmployeeGroupName',
            'BankAccounts',
            'PayTemplate',
            'OpeningBalances',
            'SuperMemberships',
            'TerminationDate',
            'EmployeeID',
            'Status',
            'UpdatedDateUTC'
        );
    }


    /**
     * @return string
     */
    public function getFirstName(){
        return $this->_data['FirstName'];
    }

    /**
     * @param string $value
     * @return Employee
     */
    public function setFirstName($value){
        $this->_data['FirstName'] = $value;
        return $this;
    }

    /**
     * @return string
     */
    public function getLastName(){
        return $this->_data['LastName'];
    }

    /**
     * @param string $value
     * @return Employee
     */
    public function setLastName($value){
        $this->_data['LastName'] = $value;
        return $this;
    }

    /**
     * @return HomeAddress
     */
    public function getHomeAddress(){
        return $this->_data['HomeAddress'];
    }

    /**
     * @param HomeAddress $value
     * @return Employee
     */
    public function setHomeAddress(HomeAddress $value){
        $this->_data['HomeAddress'] = $value;
        return $this;
    }

    /**
     * @return \DateTime
     */
    public function getStartDate(){
        return $this->_data['StartDate'];
    }

    /**
     * @param \DateTime $value
     * @return Employee
     */
    public function setStartDate(\DateTime $value){
        $this->_data['StartDate'] = $value;
        return $this;
    }

    /**
     * @return string
     */
    public function getTitle(){
        return $this->_data['Title'];
    }

    /**
     * @param string $value
     * @return Employee
     */
    public function setTitle($value){
        $this->_data['Title'] = $value;
        return $this;
    }

    /**
     * @return string
     */
    public function getMiddleNames(){
        return $this->_data['MiddleNames'];
    }

    /**
     * @param string[] $value
     * @return Employee
     */
    public function addMiddleName($value){
        $this->_data['MiddleNames'][] = $value;
        return $this;
    }

    /**
     * @return string
     */
    public function getEmail(){
        return $this->_data['Email'];
    }

    /**
     * @param string $value
     * @return Employee
     */
    public function setEmail($value){
        $this->_data['Email'] = $value;
        return $this;
    }

    /**
     * @return string
     */
    public function getGender(){
        return $this->_data['Gender'];
    }

    /**
     * @param string $value
     * @return Employee
     */
    public function setGender($value){
        $this->_data['Gender'] = $value;
        return $this;
    }

    /**
     * @return string
     */
    public function getMobile(){
        return $this->_data['Mobile'];
    }

    /**
     * @param string $value
     * @return Employee
     */
    public function setMobile($value){
        $this->_data['Mobile'] = $value;
        return $this;
    }

    /**
     * @return string
     */
    public function getTwitterUserName(){
        return $this->_data['TwitterUserName'];
    }

    /**
     * @param string $value
     * @return Employee
     */
    public function setTwitterUserName($value){
        $this->_data['TwitterUserName'] = $value;
        return $this;
    }

    /**
     * @return bool
     */
    public function getIsAuthorisedToApproveLeave(){
        return $this->_data['IsAuthorisedToApproveLeave'];
    }

    /**
     * @param bool $value
     * @return Employee
     */
    public function setIsAuthorisedToApproveLeave($value){
        $this->_data['IsAuthorisedToApproveLeave'] = $value;
        return $this;
    }

    /**
     * @return bool
     */
    public function getIsAuthorisedToApproveTimesheets(){
        return $this->_data['IsAuthorisedToApproveTimesheets'];
    }

    /**
     * @param bool $value
     * @return Employee
     */
    public function setIsAuthorisedToApproveTimesheet($value){
        $this->_data['IsAuthorisedToApproveTimesheets'] = $value;
        return $this;
    }

    /**
     * @return string
     */
    public function getOccupation(){
        return $this->_data['Occupation'];
    }

    /**
     * @param string $value
     * @return Employee
     */
    public function setOccupation($value){
        $this->_data['Occupation'] = $value;
        return $this;
    }

    /**
     * @return string
     */
    public function getClassification(){
        return $this->_data['Classification'];
    }

    /**
     * @param string $value
     * @return Employee
     */
    public function setClassification($value){
        $this->_data['Classification'] = $value;
        return $this;
    }

    /**
     * @return string
     */
    public function getOrdinaryEarningsRateID(){
        return $this->_data['OrdinaryEarningsRateID'];
    }

    /**
     * @param string $value
     * @return Employee
     */
    public function setOrdinaryEarningsRateID($value){
        $this->_data['OrdinaryEarningsRateID'] = $value;
        return $this;
    }

    /**
     * @return string
     */
    public function getPayrollCalendarID(){
        return $this->_data['PayrollCalendarID'];
    }

    /**
     * @param string $value
     * @return Employee
     */
    public function setPayrollCalendarID($value){
        $this->_data['PayrollCalendarID'] = $value;
        return $this;
    }

    /**
     * @return string
     */
    public function getEmployeeGroupName(){
        return $this->_data['EmployeeGroupName'];
    }

    /**
     * @param string $value
     * @return Employee
     */
    public function setEmployeeGroupName($value){
        $this->_data['EmployeeGroupName'] = $value;
        return $this;
    }

    /**
     * @return BankAccount
     */
    public function getBankAccounts(){
        return $this->_data['BankAccounts'];
    }

    /**
     * @param BankAccount[] $value
     * @return Employee
     */
    public function addBankAccount(BankAccount $value){
        $this->_data['BankAccounts'][] = $value;
        return $this;
    }

    /**
     * @return PayTemplate
     */
    public function getPayTemplate(){
        return $this->_data['PayTemplate'];
    }

    /**
     * @param PayTemplate $value
     * @return Employee
     */
    public function setPayTemplate(PayTemplate $value){
        $this->_data['PayTemplate'] = $value;
        return $this;
    }

    /**
     * @return OpeningBalance
     */
    public function getOpeningBalances(){
        return $this->_data['OpeningBalances'];
    }

    /**
     * @param OpeningBalance[] $value
     * @return Employee
     */
    public function addOpeningBalance(OpeningBalance $value){
        $this->_data['OpeningBalances'][] = $value;
        return $this;
    }

    /**
     * @return SuperMembership
     */
    public function getSuperMemberships(){
        return $this->_data['SuperMemberships'];
    }

    /**
     * @param SuperMembership[] $value
     * @return Employee
     */
    public function addSuperMembership(SuperMembership $value){
        $this->_data['SuperMemberships'][] = $value;
        return $this;
    }

    /**
     * @return \DateTime
     */
    public function getTerminationDate(){
        return $this->_data['TerminationDate'];
    }

    /**
     * @param \DateTime $value
     * @return Employee
     */
    public function setTerminationDate(\DateTime $value){
        $this->_data['TerminationDate'] = $value;
        return $this;
    }

    /**
     * @return string
     */
    public function getEmployeeID(){
        return $this->_data['EmployeeID'];
    }

    /**
     * @param string $value
     * @return Employee
     */
    public function setEmployeeID($value){
        $this->_data['EmployeeID'] = $value;
        return $this;
    }

    /**
     * @return string
     */
    public function getStatus(){
        return $this->_data['Status'];
    }

    /**
     * @param string $value
     * @return Employee
     */
    public function setStatu($value){
        $this->_data['Status'] = $value;
        return $this;
    }

    /**
     * @return \DateTime
     */
    public function getUpdatedDateUTC(){
        return $this->_data['UpdatedDateUTC'];
    }

    /**
     * @param \DateTime $value
     * @return Employee
     */
    public function setUpdatedDateUTC(\DateTime $value){
        $this->_data['UpdatedDateUTC'] = $value;
        return $this;
    }


}