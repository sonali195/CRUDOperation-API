# Event CRUD API

This is a simple Event CRUD API that allows admin users to create, update, delete, and fetch events directly using API endpoints. 

## Description
The API supports the following actions:
- List all events
- Create a new event
- Update an existing event
- Delete an event
- Show details of a specific event

**Note**: All API endpoints are accessible only with Basic Authentication.

## Installing
1. Download the plugin into your plugins directory
2. Enable in the WordPress admin

## Using
This plugin adds support for Basic Authentication, as specified in [RFC2617][] with Create events using API's

---

## API Endpoints

**Note**: Change website domain with your actual domain.

### 1. **List Events**
- **Endpoint**: `http://wp-testing.local/wp-json/v2/events/list`
- **Method**: `GET`

### 2. **Create Event**
- **Endpoint**: `http://wp-testing.local/wp-json/v2/events/create`
- **Method**: `POST`
- **Request Body**:
    ```json
    {
        "title": "Tech Conference",
        "description": "This is a tech conference event.",
        "status": "publish",
        "event_categories": ["category-1", "category-2", "category-3"],
        "start_date": "01/01/2024",
        "end_date": "31/12/2024"
    }
    ```

### 3. **Update Event**
- **Endpoint**: `http://wp-testing.local/wp-json/v2/events/update/14`
- **Method**: `POST`
- **Request Body**:
    ```json
    {
        "title": "Tech Conference",
        "description": "This is a tech conference event.",
        "status": "publish",
        "event_categories": ["category-1", "category-2", "category-3"],
        "start_date": "01/01/2024",
        "end_date": "31/12/2024"
    }
    ```

### 4. **Delete Event**
- **Endpoint**: `http://wp-testing.local/wp-json/v2/events/delete/14`
- **Method**: `DELETE`

### 5. **Show Event**
- **Endpoint**: `http://wp-testing.local/wp-json/v2/events/show/14`
- **Method**: `GET`

---

## Authentication
All endpoints require Basic Authentication.

### Authorization Header
