pipeline{
  agent{label "linux"}
  options {
    buildDiscarder logRotator(artifactDaysToKeepStr: '', artifactNumToKeepStr: '5', daysTOKeepStr:'', numTOKeepStr:'5')
    disableConcurrentBuilds()
  }
  stages {
    stage('Hello'){
      steps {
        echo "hello"
      }
    }
  }
}

