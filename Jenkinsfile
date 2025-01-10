
pipeline {
    agent any
    stages {
        stage('Install Dependencies') {
            steps {
                sh 'composer install'
            }
        }
        stage('Run Application') {
            steps {
                sh 'php artisan serve'
            }
        }
    }
    post {
        success {
            echo 'Pipeline selesai!'
        }
        failure {
            echo 'Pipeline gagal.'
        }
    }
}
