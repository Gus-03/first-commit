CREATE TABLE subscriptions (
    sid INT(6) NOT NULL PRIMARY KEY,
    sname VARCHAR(50) NOT NULL,
    products VARCHAR(200) NOT NULL,
    description VARCHAR(255) NOT NULL,
    total DECIMAL(6,2) NOT NULL,
    saving DECIMAL(6,2) NOT NULL,
    price DECIMAL(6,2) NOT NULL
    );


INSERT INTO subscriptions (sid, sname, products, description, total, saving, price) VALUES (1, "Yogi Subscription", "000018,000036,000044,000037","First Yogi Subscription",26,6,20);
INSERT INTO subscriptions (sid, sname, products, description, total, saving, price) VALUES (2, "Gym Subscription", "000010,000039,000043,000044","First Gym Subscription",26,6,20);
INSERT INTO subscriptions (sid, sname, products, description, total, saving, price) VALUES (3, "BeEnergized Subscription", "000010,000039,000043","First BeEnergized Subscription",20,5,15);
INSERT INTO subscriptions (sid, sname, products, description, total, saving, price) VALUES (4, "BeBalanced Subscription", "000018,000036,000042","First BeBalanced Subscription",20,5,15);



-- CREATE TABLE subscribed_subscription_packages
--              order_packages(

--     oid            PRIMARY key
--     uid user id     who purchased

--     email           for guest     
--     receiver_name   who gonna receive   --- gift
--     address         address             --- gift
--     phone number
--     sid             subscription id

--     start date
--     duration
--     end date

--     status        active paused finished
--     price
--     paid          bool paid or not paid 
--     TIMESTAMP
-- );

-- CREATE TABLE subscribed_subscription_packages_customized
--              order_packages_customized(

--     oid            PRIMARY key
--     uid user id     who purchased

--     email           for guest     
--     receiver_name   who gonna receive   --- gift
--     address         address             --- gift
--     phone number
--     pids            products in the order     show skus: 000018,000036,000044,000037

--     start date
--     duration
--     end date

--     status        active paused finished
--     price
--     paid          bool paid or not paid 
--     TIMESTAMP
-- );