CREATE TABLE mpyie_users (
    user_id INT AUTO_INCREMENT PRIMARY KEY,
    username VARCHAR (50),
    password VARCHAR (50),
    date_of_birth DATE,
    first_name VARCHAR (50),
    last_name VARCHAR (50),
    location VARCHAR (50),
    date_added TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);

CREATE TABLE mpyie_matches (
    match_id INT AUTO_INCREMENT PRIMARY KEY,
    user_who_liked INT,
    user_being_liked INT,
    is_accepted BOOL,
    date_added TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);

CREATE TABLE mpyie_photos (
    photo_id INT AUTO_INCREMENT PRIMARY KEY,
    user_id INT,
    photo_name VARCHAR,
    is_profile_picture BOOL,
    date_added TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);

CREATE TABLE mpyie_music_interests (
    music_interest_id INT AUTO_INCREMENT PRIMARY KEY,
    music_interest_description VARCHAR,
    user_id INT,
    date_added TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);


CREATE TABLE mpyie_messages (
    message_id INT AUTO_INCREMENT PRIMARY KEY,
    sender_id INT
    receiver_id INT
    date_added TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);

CREATE TABLE mpyie_social_media_accounts (
    social_media_account_id INT AUTO_INCREMENT PRIMARY KEY,
    social_media_link VARCHAR
    user_id INT
    date_added TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);
