# ClothingStore Database Structure

## Table: tblUser
This table stores information about all users, including customers and administrators.

| Column Name | Data Type | Constraints | Description |
|-------------|-----------|-------------|-------------|
| userID | INT | PRIMARY KEY, AUTO_INCREMENT | Unique identifier for each user |
| name | VARCHAR(100) | NOT NULL | Full name of the user |
| email | VARCHAR(100) | NOT NULL, UNIQUE | Email address used for login |
| password | VARCHAR(255) | NOT NULL | SHA-256 hashed password |
| role | VARCHAR(20) | NOT NULL | User role (Admin or Customer) |
| status | VARCHAR(20) | NOT NULL | Account status (Pending or Verified) |

## Database Connection Details
- **Server:** localhost
- **Database Name:** clothingstore
- **User:** clothing_user
- **Password:** password123

**Admin email:**admin@clothingstore.com
**Admin password:**admin123