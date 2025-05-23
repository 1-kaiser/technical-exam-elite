
-- 1. Display total number of albums sold per artist

SELECT Artist, SUM("2022 Sales") AS Total_Sales
FROM data_reference__album_sales_
GROUP BY Artist
ORDER BY Total_Sales

-- 2. Display combined album sales per artist

SELECT Artist, SUM("2022 Sales") AS Total_Sales
FROM data_reference__album_sales_
GROUP BY Artist
ORDER BY Total_Sales DESC

-- 3. Display the top 1 artist who sold most combined album sales

SELECT Artist, SUM("2022 Sales") AS Total_Sales
FROM data_reference__album_sales_
GROUP BY Artist
ORDER BY Total_Sales DESC
LIMIT 1

-- 4. Display the top 10 albums per year based on their number of sales

SELECT 
    Artist,
    Album,
    `2022 Sales`,
    LEFT(`Date Released`, 2) AS Year
FROM data_reference__album_sales_
WHERE LEFT(`Date Released`, 2) = '22'
ORDER BY `2022 Sales` DESC
LIMIT 10;


-- 5. Display list of albums based on the searched artist

SELECT Album FROM `data_reference__album_sales_` WHERE Artist LIKE '%Enhypen%'