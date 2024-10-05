pipeline {
    agent any
    stages {
         stage('Unit Testing') {
            steps { 
            sh "phpunit --log-junit result/phpunit/phpunit.xml -c tests/phpunit.xml"
            }
            post {
                always {
                    junit testResults: "result/phpunit/phpunit.xml"
                }
            }
        }
        stage('Deploying PHP Application') {
            steps {
                sshPublisher(publishers: [sshPublisherDesc(configName: 'web', transfers: [sshTransfer(cleanRemote: false, excludes: '', execCommand: '', execTimeout: 120000, flatten: false, makeEmptyDirs: false, noDefaultExcludes: false, patternSeparator: '[, ]+', remoteDirectory: '//var/www/html/', remoteDirectorySDF: false, removePrefix: '', sourceFiles: '**/*.php, **/*.html')], usePromotionTimestamp: false, useWorkspaceInPromotion: false, verbose: false)])
            }
        }
    }
}
