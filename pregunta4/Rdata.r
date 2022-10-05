library(ggplot2)
head(iris)
ggplot(data=iris,aes(Sepal.Length, Petal.Length))
ggplot(iris, aes(Sepal.Length, Petal.Length)) + geom_point()

# Intento 1

ggplot(iris, aes(Sepal.Length, Petal.Length, color='magenta')) + geom_point()

# Intento 2

ggplot(iris, aes(Sepal.Length, Petal.Length)) + geom_point(color='magenta')


