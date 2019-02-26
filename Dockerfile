# Use an official Python runtime as a parent image
FROM httpd
#FROM registry.access.redhat.com/rhel7.4

USER root


COPY ./ostack.repo /etc/yum.repos.d/

#COPY ./index.php /var/www/html/

#EXPOSE 8081

# Define environment variable
#RUN yum repolist
RUN yum -y install httpd

#RUN yum -y install httpd php php-common
#RUN yum -y install php-cli php-pear php-pdo php-mysqlnd php-gd php-mbstring php-mcrypt php-xml php-mysqli
#
# Run app.py when the container launches
CMD ["-D", "FOREGROUND"]
ENTRYPOINT ["/usr/sbin/httpd"]
