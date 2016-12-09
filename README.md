#Composition Over Inheritance Example

A completely pointless PHP application that builds tanks from tracks and guns using composition over inheritance.

Note that the Tank class has abstracted dependencies, providing great flexibility in terms of combining different tracks and guns. Consider how much less code is required to achieve this with composition compared to inheritance.

##Running the code
- Checkout this repository to your computer
- Start the inbuilt PHP server
```
php -S localhost:8000
```
- Run the script in your browser
```
http://localhost:8000
```

##Running the code sniffer
The code sniffer will ensure that the code in the src directory complies to the PSR standard. Before making a pull request, please run this first to ensure no formatting errors have been introduced.
```
make phpcs
```