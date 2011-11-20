all: update_submodules permissions create_groups

update_submodules:
	@@if [ -d .git ]; then \
		if git submodule status | grep -q -E '^-'; then \
			git submodule update --init --recursive; \
		else \
			git submodule update --init --recursive --merge; \
		fi; \
	fi;

permissions:
	-chmod -R 0777 app/resources


create_groups:
	libraries/lithium/console/li3 create-groups
