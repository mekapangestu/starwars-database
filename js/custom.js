// Get People Detail -------------------------------------------------------
function getPeopleDetails(id) {
    $.ajax({
        url: 'https://swapi.dev/api/people/' + id + "/",
        dataType: 'json',
        success: function(data) {
            // console.log(data.height);
            $("#name").text(data.name);
            $("#height").text(data.height);
            $("#mass").text(data.mass);
            $("#hair_color").text(data.hair_color);
            $("#skin_color").text(data.skin_color);
            $("#eye_color").text(data.eye_color);
            $("#birth_year").text(data.birth_year);
            $("#gender").text(data.gender);
            $("#created").text(data.created);
            $("#edited").text(data.edited);
            $("#url").text(data.url);

            // Homeworld
            var idPlanet = data.homeworld.split("/");
            $.ajax({
                url: 'https://swapi.dev/api/planets/' + idPlanet[5] + "/",
                dataType: 'json',
                success: function(data) {
                    $("#homeworld").text(data.name); //
                }
            });

            // Films
            var i;
            for (i = 0; i < data.films.length; i++) {
                var idFilm = data.films[i].split("/");
                $.ajax({
                    url: 'https://swapi.dev/api/films/' + idFilm[5] + "/",
                    dataType: 'json',
                    success: function(datas) {
                        console.log(data.films.length);
                        if (i < data.films.length) {
                            $("#films").append(datas.title + ", ");
                        } else {
                            $("#films").append(datas.title + ", ");
                        }

                    }
                });
            }

            // Species
            var i;
            for (i = 0; i < data.species.length; i++) {
                var idSpecies = data.species[i].split("/");
                $.ajax({
                    url: 'https://swapi.dev/api/species/' + idSpecies[5] + "/",
                    dataType: 'json',
                    success: function(datas) {
                        console.log(data.species.length);
                        if (i < data.species.length) {
                            $("#species").append(datas.name + ", ");
                        } else {
                            $("#species").append(datas.name + ", ");
                        }

                    }
                });
            }

            // Vehicles
            var i;
            for (i = 0; i < data.vehicles.length; i++) {
                var idVehicle = data.vehicles[i].split("/");
                $.ajax({
                    url: 'https://swapi.dev/api/vehicles/' + idVehicle[5] + "/",
                    dataType: 'json',
                    success: function(datas) {
                        console.log(data.vehicles.length);
                        if (i < data.vehicles.length) {
                            $("#vehicles").append(datas.name + ", ");
                        } else {
                            $("#vehicles").append(datas.name + ", ");
                        }

                    }
                });
            }

            // Starships
            var i;
            for (i = 0; i < data.starships.length; i++) {
                var idStarships = data.starships[i].split("/");
                $.ajax({
                    url: 'https://swapi.dev/api/starships/' + idStarships[5] + "/",
                    dataType: 'json',
                    success: function(datas) {
                        console.log(data.starships.length);
                        if (i < data.starships.length) {
                            $("#starships").append(datas.name + ", ");
                        } else {
                            $("#starships").append(datas.name + ", ");
                        }

                    }
                });
            }
        }
    });
}

// Get Film Detail -------------------------------------------------------
function getFilmDetails(id) {
    $.ajax({
        url: 'https://swapi.dev/api/films/' + id + "/",
        dataType: 'json',
        success: function(data) {
            console.log(data);
            $("#title").text(data.title);
            $("#episode_id").text(data.episode_id);
            $("#opening_crawl").text(data.opening_crawl);
            $("#director").text(data.director);
            $("#producer").text(data.producer);
            $("#release_date").text(data.release_date);
            $("#created").text(data.created);
            $("#edited").text(data.edited);
            $("#url").text(data.url);

            // Characters
            var i;
            var dataLength = data.characters.length;

            for (i = 0; i < dataLength; i++) {
                var idPeople = data.characters[i].split("/");
                $.ajax({
                    url: 'https://swapi.dev/api/people/' + idPeople[5] + "/",
                    dataType: 'json',
                    success: function(datas) {
                        console.log(data.characters.length);
                        if (i < data.characters.length) {
                            $("#characters").append(datas.name + ", ");
                        } else {
                            $("#characters").append(datas.name + ", ");
                        }

                    }
                });
            }

            // Planets
            var i;
            for (i = 0; i < data.planets.length; i++) {
                var idPlanet = data.planets[i].split("/");
                $.ajax({
                    url: 'https://swapi.dev/api/planets/' + idPlanet[5] + "/",
                    dataType: 'json',
                    success: function(datas) {
                        console.log(data.planets.length);
                        if (i < data.planets.length) {
                            $("#planets").append(datas.name + ", ");
                        } else {
                            $("#planets").append(datas.name + ", ");
                        }

                    }
                });
            }

            // Species
            var i;
            console.log(data.species.length);
            for (i = 0; i < data.species.length; i++) {
                var idSpecies = data.species[i].split("/");
                $.ajax({
                    url: 'https://swapi.dev/api/species/' + idSpecies[5] + "/",
                    dataType: 'json',
                    success: function(datas) {
                        console.log(data.species.length);
                        if (i < data.species.length) {
                            $("#species").append(datas.name + ", ");
                        } else {
                            $("#species").append(datas.name + ", ");
                        }

                    }
                });
            }

            // Vehicles
            var i;
            for (i = 0; i < data.vehicles.length; i++) {
                var idVehicle = data.vehicles[i].split("/");
                $.ajax({
                    url: 'https://swapi.dev/api/vehicles/' + idVehicle[5] + "/",
                    dataType: 'json',
                    success: function(datas) {
                        console.log(data.vehicles.length);
                        if (i < data.vehicles.length) {
                            $("#vehicles").append(datas.name + ", ");
                        } else {
                            $("#vehicles").append(datas.name + ", ");
                        }

                    }
                });
            }

            // Starships
            var i;
            for (i = 0; i < data.starships.length; i++) {
                var idStarships = data.starships[i].split("/");
                $.ajax({
                    url: 'https://swapi.dev/api/starships/' + idStarships[5] + "/",
                    dataType: 'json',
                    success: function(datas) {
                        console.log(data.starships.length);
                        if (i < data.starships.length) {
                            $("#starships").append(datas.name + ", ");
                        } else {
                            $("#starships").append(datas.name + ", ");
                        }

                    }
                });
            }
        }
    });
};

// Get Species Detail -------------------------------------------------------
function getSpeciesDetails(id) {
    $.ajax({
        url: 'https://swapi.dev/api/species/' + id + "/",
        dataType: 'json',
        success: function(data) {
            // console.log(data.height);
            $("#name").text(data.name);
            $("#classification").text(data.classification);
            $("#designation").text(data.designation);
            $("#average_height").text(data.average_height);
            $("#skin_colors").text(data.skin_colors);
            $("#hair_colors").text(data.hair_colors);
            $("#eye_colors").text(data.eye_colors);
            $("#average_lifespan").text(data.average_lifespan);
            $("#language").text(data.language);
            $("#created").text(data.created);
            $("#edited").text(data.edited);
            $("#url").text(data.url);

            // Homeworld
            var idPlanet = data.homeworld.split("/");
            $.ajax({
                url: 'https://swapi.dev/api/planets/' + idPlanet[5] + "/",
                dataType: 'json',
                success: function(data) {
                    $("#homeworld").text(data.name); //
                }
            });

            // Characters
            var i;
            for (i = 0; i < data.people.length; i++) {
                var idPeople = data.people[i].split("/");
                $.ajax({
                    url: 'https://swapi.dev/api/people/' + idPeople[5] + "/",
                    dataType: 'json',
                    success: function(datas) {
                        console.log(data.people.length);
                        if (i < data.people.length) {
                            $("#people").append(datas.name + ", ");
                        } else {
                            $("#people").append(datas.name + ", ");
                        }

                    }
                });
            }

            // Films
            var i;
            for (i = 0; i < data.films.length; i++) {
                var idFilm = data.films[i].split("/");
                $.ajax({
                    url: 'https://swapi.dev/api/films/' + idFilm[5] + "/",
                    dataType: 'json',
                    success: function(datas) {
                        console.log(data.films.length);
                        if (i < data.films.length) {
                            $("#films").append(datas.title + ", ");
                        } else {
                            $("#films").append(datas.title + ", ");
                        }

                    }
                });
            }
        }
    });
};

// Get Starships Detail -------------------------------------------------------
function getStarshipsDetails(id) {
    $.ajax({
        url: 'https://swapi.dev/api/starships/' + id + "/",
        dataType: 'json',
        success: function(data) {
            // console.log(data.height);
            $("#name").text(data.name);
            $("#model").text(data.model);
            $("#manufacturer").text(data.manufacturer);
            $("#cost_in_credits").text(data.cost_in_credits);
            $("#length").text(data.length);
            $("#max_atmosphering_speed").text(data.max_atmosphering_speed);
            $("#crew").text(data.crew);
            $("#passengers").text(data.passengers);
            $("#cargo_capacity").text(data.cargo_capacity);
            $("#consumables").text(data.consumables);
            $("#hyperdrive_rating").text(data.hyperdrive_rating);
            $("#MGLT").text(data.MGLT);
            $("#starship_class").text(data.starship_class);
            $("#created").text(data.created);
            $("#edited").text(data.edited);
            $("#url").text(data.url);

            // Pilots
            var i;
            for (i = 0; i < data.pilots.length; i++) {
                var idPeople = data.pilots[i].split("/");
                $.ajax({
                    url: 'https://swapi.dev/api/people/' + idPeople[5] + "/",
                    dataType: 'json',
                    success: function(datas) {
                        console.log(data.pilots.length);
                        if (i < data.pilots.length) {
                            $("#pilots").append(datas.name + ", ");
                        } else {
                            $("#pilots").append(datas.name + ", ");
                        }

                    }
                });
            }

            // Films
            var i;
            for (i = 0; i < data.films.length; i++) {
                var idFilm = data.films[i].split("/");
                $.ajax({
                    url: 'https://swapi.dev/api/films/' + idFilm[5] + "/",
                    dataType: 'json',
                    success: function(datas) {
                        console.log(data.films.length);
                        if (i < data.films.length) {
                            $("#films").append(datas.title + ", ");
                        } else {
                            $("#films").append(datas.title + ", ");
                        }

                    }
                });
            }
        }
    });
};

// Get Vehicles Detail -------------------------------------------------------
function getVehiclesDetails(id) {
    $.ajax({
        url: 'https://swapi.dev/api/vehicles/' + id + "/",
        dataType: 'json',
        success: function(data) {
            // console.log(data.height);
            $("#name").text(data.name);
            $("#model").text(data.model);
            $("#manufacturer").text(data.manufacturer);
            $("#cost_in_credits").text(data.cost_in_credits);
            $("#length").text(data.length);
            $("#max_atmosphering_speed").text(data.max_atmosphering_speed);
            $("#crew").text(data.crew);
            $("#passengers").text(data.passengers);
            $("#cargo_capacity").text(data.cargo_capacity);
            $("#consumables").text(data.consumables);
            $("#vehicle_class").text(data.vehicle_class);
            $("#created").text(data.created);
            $("#edited").text(data.edited);
            $("#url").text(data.url);

            // Pilots
            var i;
            for (i = 0; i < data.pilots.length; i++) {
                var idPeople = data.pilots[i].split("/");
                $.ajax({
                    url: 'https://swapi.dev/api/people/' + idPeople[5] + "/",
                    dataType: 'json',
                    success: function(datas) {
                        console.log(data.pilots.length);
                        if (i < data.pilots.length) {
                            $("#pilots").append(datas.name + ", ");
                        } else {
                            $("#pilots").append(datas.name + ", ");
                        }

                    }
                });
            }

            // Films
            var i;
            for (i = 0; i < data.films.length; i++) {
                var idFilm = data.films[i].split("/");
                $.ajax({
                    url: 'https://swapi.dev/api/films/' + idFilm[5] + "/",
                    dataType: 'json',
                    success: function(datas) {
                        console.log(data.films.length);
                        if (i < data.films.length) {
                            $("#films").append(datas.title + ", ");
                        } else {
                            $("#films").append(datas.title + ", ");
                        }

                    }
                });
            }
        }
    });
};

$(document).ready(function() {
    $('#dataTable').DataTable({
        "paging": true,
        "ordering": true,
        "info": false
    });

});