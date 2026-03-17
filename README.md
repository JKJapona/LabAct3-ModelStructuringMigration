# 📊 Laboratory Activity 3: Model Structuring and Migration

## 🎯 Project Objectives
* Understand the **entities and relationships** to guide database design.
* Implement the **database schema** and relationships using Laravel’s migration system.
* Use **Laravel’s model relationships** to plot and define connections between tables.

---

## 🗺️ HR System File Location Map
This map shows the specific files created to implement the HR Database ERD:

```text
japona_hrsystem/
├── app/
│   └── Models/
│       ├── Region.php      <-- [Model] hasMany Countries
│       ├── Country.php     <-- [Model] belongsTo Region, hasMany Locations
│       ├── Location.php    <-- [Model] belongsTo Country, hasMany Departments
│       ├── Department.php  <-- [Model] belongsTo Location, hasMany Employees
│       ├── Job.php         <-- [Model] hasMany Employees
│       ├── Employee.php    <-- [Model] The Core: Connects Jobs, Depts, and Manager
│       └── Dependent.php   <-- [Model] belongsTo Employee
├── database/
│   └── migrations/
│       ├── xxxx_create_regions_table.php     <-- [Database] Foundation Table
│       ├── xxxx_create_jobs_table.php        <-- [Database] Foundation Table
│       ├── xxxx_create_countries_table.php   <-- [Database] Linked to Regions
│       ├── xxxx_create_locations_table.php   <-- [Database] Linked to Countries
│       ├── xxxx_create_departments_table.php <-- [Database] Linked to Locations
│       ├── xxxx_create_employees_table.php   <-- [Database] Core HR Data
│       └── xxxx_create_dependents_table.php  <-- [Database] Final Dependent Table
└── routes/
    └── web.php                               <-- [Routes] Entry point for the application