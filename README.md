# **API Spec - Fabric Grey**

# Feature

* JWT Auth
* MYSQL

# Build
    - git clone reposotory
    - composer update
    - copy .env.example to .env
    - php artisan jwt:secret
    - php -S localhost:8000 -s public

## Authenticaion

All Api use this authentication

* Request:
    - Header :
        * Bearer-Token: "your token"

## Login

* Request:

- Method: POST
    - Endpoint: /api/v1/login
    - Header:
        * Content-Type: application/json
        * Accept: application/json
    - Body: 
    ```
    {
        "name": "string",
        "password": "string"
    }

    ```
- Response:

    ```
    {
        "massage": "success",
        "result": {
            "token":""
        },
        "code": 200
    }
    ```

## Register

* Request:

    - Method: POST
        - Endpoint: /api/v1/register
        - Header:
            * Content-Type: application/json
            * Accept: application/json
        - Body: 
        ```
        {
            "name": "string",
            "email: : "string"
            "password": "string"
        }

        ```
- Response:

    ```
    {
        "user": {
            "name": "string",
            "email": "string",
            "updated_at": "timestamp",
            "created_at": "timestamp",
            "id": "integer"
        },
        "token": "eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1N"
    }
    ```

## CREATE Fabric

* Request:

    - Method: POST
        - Endpoint: /api/v1/fabric/store
        - Header:
            * Content-Type: application/json
            * Accept: application/json
            * Bearer Token: "eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1N"
        - Body: 
        ```
        {
            "fabric_type": "string",
            "machine_id: : "integer"
            "brand": "string"
            "po_number": "integer"
        }

        ```
- Response:

    ```
   {
        "massage": "POST Data",
        "data": {
            "fabric_type": "string",
            "machine_id: : "integer"
            "brand": "string"
            "po_number": "integer"
            "updated_at": "timestamp",
            "created_at": "timestamp",
            "id": "id"
        },
        "code": 200
    }
    ```

## GET Fabric

* Request:

    - Method: GET
        - Endpoint: /api/v1/fabric/
        - Header:
            * Content-Type: application/json
            * Accept: application/json
            * Bearer Token: "eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1N"
- Response:

    ```
   {
        "massage": "GET Success",
        "data": [
            {
                "id": "integer",
                "fabric_type": "string",
                "machine_id: : "integer"
                "brand": "string"
                "po_number": "integer"
                "updated_at": "timestamp",
                "created_at": "timestamp",
            },
            {
                "id": integer,
                "fabric_type": "string",
                "machine_id: : "integer"
                "brand": "string"
                "po_number": "integer"
                "updated_at": "timestamp",
                "created_at": "timestamp",
            },
        ],
        "code": 200
    }
    ```
## GET BY ID Fabric

* Request:

    - Method: GET
        - Endpoint: /api/v1/fabric/show/{param-ID}
        - Header:
            * Content-Type: application/json
            * Accept: application/json
            * Bearer Token: "eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1N"
- Response:

    ```
    {
        "massage": "GET ID Success",
        "result": {
            "id": integer,
            "fabric_type": "string",
            "machine_id: : "integer"
            "brand": "string"
            "po_number": "integer"
            "updated_at": "timestamp",
            "created_at": "timestamp",
            "machine": {
                "id": "integer",
                "name": "string",
                "short_name": "string",
                "type_machine": "string",
                "created_at": "timestamp",
                "updated_at": "timestamp"
            }
        },
        "code": 200
    }
    ```

## PUT Fabric

* Request:

    - Method: PUT
        - Endpoint: /api/v1/fabric/update/{param-ID}
        - Header:
            * Content-Type: application/json
            * Accept: application/json
            * Bearer Token: "eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1N"
        - Body: 
        ```
        {
            "fabric_type": "string",
            "machine_id: : "integer"
            "brand": "string"
            "po_number": "integer"
        }

        ```
- Response:

    ```
   {
        "massage": "PUT Data",
        "data": {
            "fabric_type": "string",
            "machine_id: : "integer"
            "brand": "string"
            "po_number": "integer"
            "updated_at": "timestamp",
            "created_at": "timestamp",
            "id": "id"
        },
        "code": 200
    }
    ```

## DELETE Fabric

* Request:

    - Method: DELETE
        - Endpoint: /api/v1/fabric/delete/{param-ID}
        - Header:
            * Content-Type: application/json
            * Accept: application/json
            * Bearer Token: "eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1N"
- Response:

    ```
   {
        "massage": "Delete Data",
        "data": {
            "fabric_type": "string",
            "machine_id: : "integer"
            "brand": "string"
            "po_number": "integer"
            "updated_at": "timestamp",
            "created_at": "timestamp",
            "id": "id"
        },
        "code": 200
    }
    ```
