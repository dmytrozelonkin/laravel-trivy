Important notice: SonarCloud Free plan is not available for private Github repositories.

Initial setup
- replace {{PATH_TO_DOCKERFILE}} inside ./github/workflows/build.yml on actual path to Dockerfile inside your project
- make sure that package.json file has name and version fields(trivy needs these fields to be able to analyse JS dependencies properly)
- 

SonarCloud setup
- Login to SonarCloud using github account and import your organization & project
- Disable automatic analysis on SonarCloud: select project -> Administration -> Analysis Method -> Automatic Analysis
- Set the SONAR_TOKEN env variable in github: Setting -> Secrets and Variables -> Actions -> New Secret Repository
    Name: SONAR_TOKEN
    Secret: Go to SonarCloud -> My Account -> Security tab -> Generate token
- Create sonar-project.properties file in the root directory
    Add following properties:
      sonar.organization={{ ORGANIZATION_NAME }} (Open Information page on the project details page -> find Organization Key)
      sonar.projectKey={{ PROJECT_KEY }} (Open Information page on the project details page -> find Project Key)
      sonar.sources=.
- Configure Quality Gates
