# php-classifier
Naive Bayes Classifier accessible via HTTP requests

## Linux command to get started

git clone https://github.com/richard512/php-classifier.git && cd php-classifier && chmod +x serve.sh && ./serve.sh

## How to Train:

Example Input:

http://localhost:3000/train.php?train=hello&category=standard%20greeting

Example Output:

Trained "hello" to category "standard greeting"

## How to Classify:

Example Input:

http://localhost:3000/classify.php?classify=hello

Example Output:

{"category":"Standard Greeting","score":100}
