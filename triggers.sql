--trigger created to make sure that once a country deleted, it will automaticament delete its cities

CREATE TRIGGER `delete_city_on_country` AFTER DELETE ON `country`
 FOR EACH ROW BEGIN
DELETE FROM city
WHERE idCountry=OLD.idCountry;
END

--trigger created to avoid a membre make a suggestion of a city that already exists in the base

CREATE TRIGGER `one_display` BEFORE INSERT ON `suggestion`
 FOR EACH ROW begin
	if(new.city_suggestion IN (select suggestion.city_suggestion from suggestion)) then
		SIGNAL SQLSTATE '45000' set MESSAGE_TEXT = "Thanks! But this city has already been taken into consideration.";
	end if;
end
