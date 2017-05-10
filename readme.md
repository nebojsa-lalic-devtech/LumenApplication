# Lumen App

Simple CRUD App with Lummen

- base url: 'http://homestead.app/employee'
(for make requests you can use POSTMAN app)
- for GET ALL EMPLOYEES make GET request on base url 'http://homestead.app/employee' which will return array of all employees from database
- for GET ONE EMPLOYEE with specific ID, create GET request on 'http://homestead.app/employee/{id}'
- for CREATE EMPLOYEE you create POST request with body in form:
{
  "first_name": "SomeFirstName",
  "last_name": "SomeLastName",
  "email": "example@mail.com",
  "job": "exampleJob"
}
and use also base url 'http://homestead.app/employee'
- for UPDATE EMPLOYEE you also do same just this time with PUT request
- for DELETE EMPLOYEE send DELETE request on 'http://homestead.app/employee/{id}'

-custom logging created in EmployeeController you can find in 'storage/lumen.log' file where are also other lumen logs